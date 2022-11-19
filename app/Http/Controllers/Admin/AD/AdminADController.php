<?php

namespace App\Http\Controllers\Admin\AD;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminADController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->all();
        $data = Post::getNotDeleted()->filter($query)->with('mainCategory')->with('subCategory')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.ad.ad', compact('data'));
    }

    public function approve(Request $request)
    {
        $request->validate([
            'record_id' => 'required'
        ]);

        Post::where('id', base64_decode($request->record_id))->update(['status' => 1]);

        return redirect(route('admin.ad'))->with('color', 'success')->with('message', 'Advertiesment Approved Successfully');
    }

    public function delete(Request $request)
    {
        Post::where('id', base64_decode($request->id))->update(['status' => 3]);
        return redirect(route('admin.ad'))->with('color', 'danger')->with('message', 'Advertiesment Deleted ');
    }
}
