<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashbardController extends Controller
{
    //auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view("layout/index");
    }
    public function showCustomers(){
        $users = User::all();
        return view("admin/customer/index" , compact("users"));
    }
}
