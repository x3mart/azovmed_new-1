<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ShowCategoryController extends Controller
{

    public function __invoke($catAlias)
    {
        $category = Category::with('products')
                ->where('alias', $catAlias)
                ->visible()
                ->firstOrFail();
        return view('category', ['category' => $category]);
    }
}
