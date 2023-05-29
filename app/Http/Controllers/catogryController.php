<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class catogryController extends Controller
{
    //auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexCatogry(){
        $catogries = Categorie::all();
        return view("admin\catogry\index" , compact("catogries"));
    }
    public function createPage(){
        return view("admin\catogry\create");
    }
    public function createCatogry(Request $request){
        $catogry = new Categorie();
        $catogry->name = $request->name;
        $catogry->save();
        return redirect()->action([catogryController::class , "indexCatogry"]);
    }

    public function deleteCatogry($id){
        $catogry = Categorie::find($id);
        $catogry->delete();
        return redirect()->back();
    }

    public function updateCatogryPage($id){
        $catogry = Categorie::find($id);
        return view("admin\catogry\update" , compact("catogry"));
    }

    public function updateCatogry(Request $request){
        $catogry = Categorie::find($request->id);
        $catogry->name = $request->name;
        $catogry->save();
        return redirect()->action([catogryController::class , "indexCatogry"]);
    }
}
