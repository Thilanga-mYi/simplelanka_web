<?php

namespace App\Http\Controllers;

use App\Models\AdSubCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdMainCategoriesController extends Controller
{
    public function listSubCategories(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric|exists:ad_sub_categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $adSubCategory = AdSubCategories::where('main_category_id', $request->id)
            ->orderby('name', 'ASC')
            ->get();

        return response()->json([
            'type' => 'success',
            'data' => $adSubCategory,
        ]);
    }
}
