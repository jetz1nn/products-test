<?php

namespace App\Http\Controllers;

use App\Domains\Products\Models\Product;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller {
    //
    public function index() {
        return Product::all();
    }

    public function store(CreateProductRequest $request) {

        $product = new Product($request->validated());

        $product->save();

        return $product;
    }

    public function update($product, UpdateProductRequest $request) {

        $product = Product::findOrFail($product);

        $product->fill($request->all());

        $product->save();

        return $product;
    }

    public function show($product) {
        return Product::find($product);
    }

    public function destroy($product) {
        Product::destroy($product);
        return ['success' => true, "message" => "Product deleted successfully!"];
    }
}
