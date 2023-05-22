<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use App\Http\Controllers\ProductController;


class ProductController extends Controller
{
    public function indexProduct(){
        $products = Product::all();
        return view("admin/products/index" , compact("products"));
    }

    public function createPage(){
        $catogries = Categorie::all();
        return view("admin/products/create" , compact("catogries"));
    }

    public function createProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->details = $request->detail;
        $product->price = $request->price;
        $product->category_id = $request->catogry;
        $product->image = "anything";
        $product->save();
        return redirect()->action([ProductController::class , "indexProduct"]);
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function updateProductPage($id){
        $product = Product::find($id);
        $catogry_name = Categorie::find($product->category_id);
        $catogries = Categorie::all();
        return view("admin/products/edit" , compact("product" , "catogry_name" , "catogries"));
    }

    public function updateProduct(Request $request){
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->details = $request->detail;
        $product->price = $request->price;
        $product->category_id = $request->catogry;
        $product->save();
        return redirect()->action([ProductController::class , "indexProduct"]);
    }
}
