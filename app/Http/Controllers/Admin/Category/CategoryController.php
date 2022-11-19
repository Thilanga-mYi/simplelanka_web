<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\AdMainCategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->all();
        $categories = AdMainCategories::getNotDeleted()->filter($query)->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.enrollment.category.category', compact('categories'));
    }

    public function manage(Request $request)
    {
        $type = 1;
        $data = null;
        $record_id = null;
        if ($request->has('record_id') && $request->filled('record_id')) {
            $type = 2;
            $record_id = $request->record_id;
            $data = AdMainCategories::where('id', $record_id)->first();
        }
        return view('admin.enrollment.category.category-manage', compact('type', 'data', 'record_id'));
    }

    public function enroll(Request $request)
    {

        $request->validate([
            'process_type' => 'required|in:1,2',
            'record_id' => 'nullable|exists:ad_main_categories,id',
        ]);

        if ($request->process_type == 1) {
            $request->validate([
                'type' => 'required|in:' . implode(",", array_keys(config('categoryTypes'))),
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,png',
                'slug' => 'required|string|unique:ad_main_categories,slug',
            ]);
        } else {
            $request->validate([
                'type' => 'required|in:' . implode(",", array_keys(config('categoryTypes'))),
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,png',
                'slug' => 'required|string',
            ]);
        }

        $data = [
            'type' => $request->type,
            'name' => $request->name,
            'slug' => $request->slug,
        ];

        if ($request->has('image') && $img = $request->file('image')) {
            $imageName = resizeUploadImage($img, '/uploads/category/', env('CATEGORY_PREFIX') . time(), env('CATEGORY_HEIGHT'), env('CATEGORY_WIDTH'));
            $data['image'] = $imageName;
        }

        if ($request->process_type == 1) {
            AdMainCategories::create($data);
        } else {
            AdMainCategories::where('id', $request->record_id)->update($data);
        }

        return redirect(route('admin.enrollment.category'))->with('color', ($request->process_type == 1) ? 'success' : 'warning')->with('message', 'Main Category Successfully ' . ($request->process_type == 1 ? 'Created' : 'Updated'));
    }

    public function delete(Request $request)
    {
        AdMainCategories::where('id', base64_decode($request->id))->update(['status' => 3]);
        return redirect(route('admin.enrollment.category'))->with('color', 'danger')->with('message', 'Main Category Deleted ');
    }
}
