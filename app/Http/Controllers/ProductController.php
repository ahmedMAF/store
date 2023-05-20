<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ProductController;


class ProductController extends Controller
{
    public function indexProduct(){
        $products = Product::all();
        return view("admin/products/index" , compact("products"));
    }

    public function createPage(){
        return view("admin/products/create");
    }

    public function ProductProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->details = $request->detail;
        $product->price = $request->price;
        $product->category_id = $request->catogry;
        $product->image = "anything";
        $product->save();
        return redirect()->action([ProductController::class , "indexProduct"]);
    }
}
