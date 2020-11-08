<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class AdminsHomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $categories = Category::with('products')->get();
        $products = Product::orderBy('position', 'asc')->get();
        return view('admin.home', ['categories' => $categories, 'products' => $products]);
    }
}
