<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{

    /**
     * Show the start page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::where('category_id', '!=', 7)
                    ->orderBy('position', 'asc')
                    ->visible()
                    ->get();
        return view('index', ['products' => $products]);
    }
}
