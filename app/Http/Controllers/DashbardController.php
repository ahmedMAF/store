<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbardController extends Controller
{
    public function dashboard(){
        return view("layout/index");
    }
}
