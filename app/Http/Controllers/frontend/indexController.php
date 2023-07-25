<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\service;
use App\Models\setting;
use App\Models\slider;
use App\Models\Subcategories;
use App\Models\tcata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class indexController extends Controller
{
    public function index(){
        $categories = category::get()->all();
        $Subcategories = Subcategories::get()->all();
        $sliders = slider::get()->all();
        $flashProducts = product::where(['flash'=>1])->get()->all();
        $topCategory=category::join('tcatas',function($join){
            $join->on("categories.id", '=', "tcatas.c1")
            ->orOn("categories.id", '=', "tcatas.c2")
            ->orOn("categories.id", '=', "tcatas.c3");
        })->get();
        $newArrivals = product::where(['new'=>1])->take(5)->get();
        $discount = product::where('dis',"!=",null)->orderBy('dis', 'DESC')->get();
        $foryou = product::take(10)->get();
        $services = service::where('status','=',1)->get();

        $data = compact('Subcategories','categories','sliders','flashProducts','topCategory','newArrivals','discount','foryou','services');
        return view('frontend.index')->with($data);
    }

    // Search Query
    public function gotosearch(Request $req){
        if($req->search == ""){
            return redirect()->back();
        }else{
              $products=product::where('name',"LIKE","%".$req->search."%")->get()->all();
              $search_key=$req->search;
              $data= compact('search_key','products');
               return view('frontend.search')->with($data);
        }
      
    }

}
