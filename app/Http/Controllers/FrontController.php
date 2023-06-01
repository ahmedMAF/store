<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function homePage(){
        $products = Product::paginate(3);
        return view("Home\index" , compact("products"));
    }
    public function productDetails($id){
        $product = Product::find($id);
        return view("Home\detail" , compact("product"));
    }
}
