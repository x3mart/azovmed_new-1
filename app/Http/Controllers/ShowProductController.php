<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ShowProductController extends Controller
{

    public function __invoke($catAlias, $productAlias)
    {
        $product = Product::with(['images', 'category'])
                ->where('alias', $productAlias)
                ->visible()
                ->firstOrFail();
        $productsInCategory = Category::findOrFail($product->category->id)
                ->products()
                ->with('images')
                ->visible()
                ->get()
                ->except($product->id);
    return view('product', ['product' => $product, 'productsInCategory' => $productsInCategory]);
    }
}
