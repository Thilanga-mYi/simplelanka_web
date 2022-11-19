<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;

class AdminShopController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->all();
        $data = Shop::getNotDeleted()->filter($query)->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.shop.shop', compact('data'));
    }

    public function approve(Request $request)
    {
        $request->validate([
            'record_id' => 'required'
        ]);

        Shop::where('id', base64_decode($request->record_id))->update(['status' => 1]);

        return redirect(route('admin.shop'))->with('color', 'success')->with('message', 'Shop Approved Successfully');
    }

    public function delete(Request $request)
    {
        Shop::where('id', base64_decode($request->id))->update(['status' => 3]);
        return redirect(route('admin.shop'))->with('color', 'danger')->with('message', 'Shop Deleted ');
    }
}
