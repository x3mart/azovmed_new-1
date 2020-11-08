<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\ModelsImages;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::of($request->name)->slug('_');
        $product = Product::create(['name' => $request->name, 'alias' => $slug, 'category_id' => 1]);
        return redirect()->route('product.edit', ['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product->load(['images', 'category']);
        $categories = Category::all();
        return view('admin.products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->except('_token');
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $image = $file->store('products');
                $product->images()->create(['name' => $image]);
            }
        }
        $product->update([
            'body' => $data['body'],
            'category_id' => $data['catId'],
            'is_visible' => isset($data['visible']) ? 1 : 0,
            'name' => $data['name'],
            // 'alias' => Str::of($data['name'])->slug('_')
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product)
    {
        DB::transaction(function () use($product) {
            Storage::delete($product->images()->pluck('name')->toArray());
            $product->images()->forceDelete();
            $product->delete();
        });
        return redirect()->route('admin');
    }

    public function ajaxProductPosition(Request $request)
    {
        $data = $request->json()->all();
        foreach ($data as $row) {
            Product::where('id', $row['id'])->update([
                'position' => $row['position']
            ]);
        }
    }
}
