<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.enrollment.category.category');
    }

    public function add(Request $request)
    {
        $request->validate([
            'type'=>'required|in:'.implode (",", array_keys(config('categoryTypes'))),
            'code'=>'required|string|min:2',
            'category'=>'required|string',
            'main_category'=>'nullable|exists:ad_main_categories,id',
            'slug'=>'required|string',
        ]);
    }
}
