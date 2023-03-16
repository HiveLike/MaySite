<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function delete(Product $product){
        $product -> delete();

        return redirect()->route('admin');
    }

    public function editForm(Product $product){
        return view('products.edit',['product' => $product]);
    }

    public function createForm(Product $product){
        return view('products.create');
    }

    public function create(Product $product, ProductStoreRequest $request){

        $validated = $request->validated();

        if($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $prod = Product::query()->create($validated);

        return redirect()->route('admin');
    }

    public function edit(Product $product, ProductStoreRequest $request){

        $validated = $request->validated();

        if($request->file('photo')) {
            $validated['image_path'] = $request->file('photo')->store('public/images');
        }

        $product->update($validated);

        return redirect()->route('admin');
    }
}
