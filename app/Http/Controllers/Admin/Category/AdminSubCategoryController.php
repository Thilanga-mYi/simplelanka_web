<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\AdMainCategories;
use App\Models\AdSubCategories;
use Illuminate\Http\Request;

class AdminSubCategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->all();
        $categories = AdSubCategories::getNotDeleted()->filter($query)->with('mainCategory')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.enrollment.sub-category.sub-category', compact('categories'));
    }

    public function manage(Request $request)
    {
        $type = 1;
        $data = null;
        $record_id = null;
        $mainCategories=AdMainCategories::getActive()->get();
        if ($request->has('record_id') && $request->filled('record_id')) {
            $type = 2;
            $record_id = $request->record_id;
            $data = AdSubCategories::where('id', $record_id)->with('mainCategory')->first();
        }
        return view('admin.enrollment.sub-category.sub-category-manage', compact('type', 'data', 'record_id','mainCategories'));
    }

    public function enroll(Request $request)
    {

        $request->validate([
            'process_type' => 'required|in:1,2',
            'record_id' => 'nullable|exists:ad_sub_categories,id',
        ]);

        if ($request->process_type == 1) {
            $request->validate([
                'main_category' => 'required|exists:ad_main_categories,id',
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,png',
            ]);
        } else {
            $request->validate([
                'main_category' => 'required|exists:ad_main_categories,id',
                'name' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,png',
            ]);
        }

        $data = [
            'main_category_id' => $request->main_category,
            'name' => $request->name,
        ];

        if ($request->has('image') && $img = $request->file('image')) {
            $imageName = resizeUploadImage($img, '/uploads/sub-category', env('SUB_CATEGORY_PREFIX') . time(), env('CATEGORY_HEIGHT'), env('CATEGORY_WIDTH'));
            $data['image'] = $imageName;
        }

        if ($request->process_type == 1) {
            AdSubCategories::create($data);
        } else {
            AdSubCategories::where('id', $request->record_id)->update($data);
        }

        return redirect(route('admin.enrollment.sub-category'))->with('color', ($request->process_type == 1) ? 'success' : 'warning')->with('message', 'Record Successfully ' . ($request->process_type == 1 ? 'Created' : 'Updated'));
    }

    public function delete(Request $request)
    {
        AdSubCategories::where('id', base64_decode($request->id))->update(['status' => 3]);
        return redirect(route('admin.enrollment.sub-category'))->with('color', 'danger')->with('message', 'Record Deleted ');
    }
}
