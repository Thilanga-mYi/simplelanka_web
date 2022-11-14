<?php

namespace App\Http\Controllers;

use App\Models\AdMainCategories;
use App\Models\AdSubCategories;
use App\Models\Media;
use App\Models\Post;
use App\Models\PostHasMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function enrollPost(Request $request)
    {

        try {

            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'post_title' => 'required|string',
                'post_main_category' => 'required|numeric|exists:ad_main_categories,id',
                'post_sub_category' => 'required|numeric',
                'post_regular_price' => 'required|numeric',
                'post_sale_price' => 'nullable|numeric',
                'post_price_condition_group' => 'required|numeric',
                'post_category_group' => 'required|numeric',
                'post_product_condition_group' => 'nullable|numeric',
                'post_description' => 'required|string',
                'post_main_image' => 'required|mimes:jpeg,png,jpg,webp',
            ]);

            if ($validator->fails()) {
                // return response()->json(['error' => $validator->errors()->all()]);
                return redirect('/register-user/ad-post')
                    ->with('status', 'Something went wrong. Please Try Again')
                    ->with('errors', $validator->errors()->all())
                    ->with('code', 400);
            }

            $post_data = [
                'user_id' => auth()->user()->id,
                'title' => $request->post_title,
                'main_category' => $request->post_main_category,
                'sub_category' => $request->post_sub_category,
                'regular_price' => $request->post_regular_price,
                'sale_price' => $request->post_sale_price == null ? 0 : $request->post_sale_price,
                'price_condition' => $request->post_price_condition_group,
                'ad_type' => $request->post_category_group,
                'product_condition' => $request->post_product_condition_group,
                'description' => $request->post_description,
                'status' => 1,
            ];

            $post_obj = Post::create($post_data);

            // MAIN IMAGES
            if ($mainFile = $request->file('post_main_image')) {
                $imageName =  time() . $mainFile->getClientOriginalName();
                $mainFile->move(public_path() . '/uploads/posts/', $imageName);

                $main_image_data = [
                    'user_id' => auth()->user()->id,
                    'image' => $imageName,
                    'alt' => $imageName,
                    'status' => 1,
                ];

                $post_main_image_obj = Media::create($main_image_data);

                $post_has_images = [
                    'post_id' => $post_obj->id,
                    'media_id' => $post_main_image_obj->id,
                    'media_type' => 1,
                    'status' => 1,
                ];

                PostHasMedia::create($post_has_images);
            }

            // FEATURED IMAGES
            if ($files = $request->file('post_images')) {

                foreach ($files as $file) {

                    $imageName =  time() . $file->getClientOriginalName();
                    $file->move(public_path() . '/uploads/posts/', $imageName);

                    $featured_image_data = [
                        'user_id' => auth()->user()->id,
                        'image' => $imageName,
                        'alt' => $imageName,
                        'status' => 1,
                    ];

                    $post_featured_image_obj = Media::create($featured_image_data);

                    $post_has_images = [
                        'post_id' => $post_obj->id,
                        'media_id' => $post_featured_image_obj->id,
                        'media_type' => 2,
                        'status' => 1,
                    ];

                    PostHasMedia::create($post_has_images);
                }
            } else {
                return redirect('/register-user/ad-post')
                    ->with('status', 'Please Add Some Post Images to Upload.')
                    ->with('code', 500);
            }

            DB::commit();

            return redirect('/register-user/ad-post')
                ->with('status', 'Successfully Added a Post')
                ->with('code', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            error_log($th);
        }
    }

    public function ListAds(Request $request)
    {

        try {

            error_log(json_encode($request->all()));

            $validator = Validator::make($request->all(), [
                // 'page' => 'required|string',
                // 'item_count' => 'required|numeric',
                'sorted_by' => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->all()]);
            }

            $records = [];

            // $data = [];
            // $ad_list = Post::where('user_id', auth()->user()->id)
            //     ->skip(($request->page - 1) * $request->item_count)
            //     ->take($request->item_count)
            //     ->get();

            if ($request->sorted_by == 1) {
                $ad_list = Post::where('user_id', auth()->user()->id)->get();
            } elseif ($request->sorted_by == 2) {
                $ad_list = Post::where('user_id', auth()->user()->id)->where('ad_type', 1)->get();
            } elseif ($request->sorted_by == 3) {
                $ad_list = Post::where('user_id', auth()->user()->id)->where('ad_type', 2)->get();
            }

            foreach ($ad_list as $ad) {
                $thumb_img = Media::where('id', PostHasMedia::where('post_id', $ad->id)->where('media_type', 1)->first()->media_id)->first();
                $records[] = [
                    'name' => $ad->title,
                    'regular_price' => 'LKR. ' . number_format($ad->regular_price, 2),
                    'sale_price' => 'LKR. ' . number_format($ad->sale_price, 2),
                    'image' => 'uploads/posts/' . $thumb_img->image,
                    'ad_type' => $ad->ad_type == 1 ? 'product' : 'service',
                    'sub_category' => AdSubCategories::where('id', $ad->sub_category)->first()->name,
                    'sub_category_id' => AdSubCategories::where('id', $ad->sub_category)->first()->id,
                    'main_category' => AdMainCategories::where('id', $ad->main_category)->first()->name,
                    'main_category_id' => AdMainCategories::where('id', $ad->main_category)->first()->id,
                    'location' => auth()->user()->city . ', ' . auth()->user()->district_id['name'],
                    'created_at' => Carbon::parse($ad->created_at)->format('d, M - Y'),
                    'views' => $ad->avg_views,
                    'ratings' => $ad->avg_rating == 6 ? 'No Ratings' : $ad->avg_rating,
                    'ad_count' => Post::where('user_id', auth()->user()->id)->count(),
                    // 'user_details' => auth()->user(),
                    // 'sub_category' => AdSubCategories::where('id', $ad->sub_category)->first(),
                    // 'post_details' => $ad,
                    // 'post_thumb' => 'uploads/posts/' . $thumb_img->image,
                ];
            }

            // $data['ads'] = [$records];
            // $data['item_count'] = $ad_list->count();
            // $data['pages'] = $ad_list->count() / $request->item_count;

            // error_log(json_encode($data));
            // return $data;

            return $records;
        } catch (\Throwable $th) {
            error_log($th);
        }
    }
}
