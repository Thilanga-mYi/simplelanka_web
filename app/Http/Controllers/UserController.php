<?php

namespace App\Http\Controllers;

use App\Models\AdMainCategories;
use App\Models\Districts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userProfilePage()
    {
        $district_list = Districts::where('status', 1)->get();
        return view('/member_profile', compact('district_list'));
    }

    public function userCreateShop()
    {
        $district_list = Districts::where('status', 1)->get();
        return view('/member_create_shop', compact('district_list'));
    }

    public function userEnrollPost()
    {
        $main_categories = AdMainCategories::where('status', 1)->orderby('name', 'ASC')->get();
        return view('/member_post_ad', compact('main_categories'));
    }

    public function userListAds()
    {
        return view('/member_my_ads');
    }

    public function updateUser(Request $request)
    {

        try {

            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'user_image' => 'mimes:jpeg,png,jpg',
                'user_first_name' => 'required|string',
                'user_last_name' => 'nullable|string',
                'user_mobile_number' => 'nullable|numeric|digits:10',
                'user_whatsapp' => 'nullable|numeric|digits:10',
                'user_district_id' => 'required|numeric|exists:districts,id',
                'user_address' => 'nullable|string',
                'user_city' => 'nullable|string',
                'user_website' => 'nullable|string',
                'user_gender' => 'required|numeric',
            ]);

            if ($validator->fails()) {
                error_log(json_encode($validator->errors()->all()));
                return redirect('/register-user/profile')
                    ->with('status', 'Something went wrong. Please Try Again')
                    ->with('errors', $validator->errors()->all())
                    ->with('code', 400);
            }

            $data = [
                'name' => $request->user_first_name,
                'last_name' => $request->user_last_name,
                'gender' => $request->user_gender,
                'mobile_number' => $request->user_mobile_number,
                'district_id' => $request->user_district_id,
                'address' => $request->user_address,
                'city' => $request->user_city,
                'whatsapp' => $request->user_whatsapp,
                'website' => $request->user_website,
            ];

            if ($request->hasFile('user_image')) {
                $image = $request->user_image;
                $imageName =  time() . $image->getClientOriginalName();
                $image->move(public_path() . '/uploads/user_images/', $imageName);

                $data['image'] = $imageName;
            }

            User::where('id', auth()->user()->id)->update($data);
            DB::commit();

            return redirect('/register-user/profile')
                ->with('status', 'Successfully Updated Profile Details')
                ->with('code', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            error_log($th);

            return redirect('/register-user/profile')
                ->with('status', 'Something went wrong. Please Try Again')
                ->with('code', 500);
        }
    }
}
