<?php

namespace Upsoftware\Ecommerce\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Upsoftware\Ecommerce\Models\EcommerceCategory;
use Upsoftware\Ecommerce\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function index(EcommerceCategory $category) {
        if ($category->id) {
            return new CategoryResource($category);
        } else {
            $items = EcommerceCategory::where('parent_id', '=', NULL)->with('children')->get();
            return CategoryResource::collection($items);
        }

    }
}
