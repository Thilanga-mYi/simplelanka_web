<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function enrollShop(Request $request)
    {

        try {

            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'shop_name' => 'required|string',
                'shop_city' => 'required|string',
                'shop_district_id' => 'required|numeric',
                'shop_address' => 'required|string',
                'shop_description' => 'nullable|string',
                'shop_tel1' => 'required|numeric',
                'shop_tel2' => 'required|numeric',
                'shop_logo' => 'required|mimes:jpeg,png,jpg',
                'shop_register_type' => 'required|numeric',
                'shop_register_no' => 'nullable|string',
                'shop_registration_document_image' => 'nullable|mimes:jpeg,png,jpg',
            ]);

            if ($validator->fails()) {
                error_log(json_encode($validator->errors()->all()));
                return redirect('/register-user/create-shop')
                    ->with('status', 'Something went wrong. Please Try Again')
                    ->with('errors', $validator->errors()->all())
                    ->with('code', 400);
            }

            $data = [
                // 'agent_id' => $request->agent,
                'user_id' => auth()->user()->id,
                'name' => $request->shop_name,
                'city' => $request->shop_city,
                'district_id' => $request->shop_district_id,
                'address' => $request->shop_address,
                'tel1' => $request->shop_tel1,
                'tel2' => $request->shop_tel2,
                'register_type' => $request->shop_register_type,
                'register_no' => $request->shop_register_no,
                'description' => $request->shop_description,
                'status' => 1,
            ];

            if ($request->hasFile('shop_logo')) {
                $image = $request->shop_logo;
                $imageName =  time() . $image->getClientOriginalName();
                $image->move(public_path() . '/uploads/shop/logo/', $imageName);
                $data['logo'] = $imageName;
            }

            if ($request->hasFile('shop_registration_document_image')) {
                $register_image = $request->shop_registration_document_image;
                $registerImageName =  time() . $register_image->getClientOriginalName();
                $register_image->move(public_path() . '/uploads/shop/registration_image', $registerImageName);
                $data['registration_document_image'] = $registerImageName;
            }

            // if ($request->has('agent_ref')) {
            //     return redirect('/register-user/create-shop')
            //         ->with('status', 'Invalid Agent Referance. Please Try Again.')
            //         ->with('errors', $validator->errors()->all())
            //         ->with('code', 400);
            // }

            Shop::create($data);
            DB::commit();

            return redirect('/register-user/create-shop')
                ->with('status', 'Successfully Create Shop')
                ->with('code', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            error_log($th);

            return redirect('/register-user/create-shop')
                ->with('status', 'Something went wrong. Please Try Again')
                ->with('code', 500);
        }
    }
}
