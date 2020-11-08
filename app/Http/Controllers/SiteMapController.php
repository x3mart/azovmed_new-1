<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\App;

class SiteMapController extends Controller
{
    public function __invoke()
    {
        $sitemap = App::make("sitemap");
        $sitemap->setCache('laravel.sitemap1', 10080);

        if (!$sitemap->isCached()) {
            $sitemap->add(App::make('url')->to('/'));

            $categories = Category::visible()->get();
            foreach ($categories as $category) {
                $sitemap->add(route('category', ['catAlias' => $category->alias]));
            }

            $products = Product::visible()->get();
            foreach ($products as $product) {
                $sitemap->add(route('product', ['catAlias' => $product->category->alias, 'productAlias' => $product->alias]));
            }
        }
        return $sitemap->render('xml');
    }
}
