<?php

namespace App\Http\Controllers;

use App\Domains\Products\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    //


    public function __construct() {
    }


    public function index() {
        return Product::all();
    }

    public function store(Request $request) {


        $product = new Product($request->all());

        $product->save();


        return $product;
    }

    public function update($product, Request $request) {

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
