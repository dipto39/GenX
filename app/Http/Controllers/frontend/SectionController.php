<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\category;
use App\Models\product;
use App\Models\Subcategories;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    // get category and Sub category 
    public function getCategory(Request $req,$ct){
        $ct= str_replace('_',' ',$ct);
        $allcata= category::get()->all();
        $cid=0;
        foreach ($allcata as  $value) {
           if($value['cname'] == $ct){
            $cid = $value['id'];
           }
        }
        $products=product::where('ct','=',$cid)->get();
        if($cid == 0){
            $allcata= Subcategories::get()->all();
            foreach ($allcata as $value) {
                if($value['subcname'] == $ct){
                 $cid = $value['sid'];
                }
             }
        $products=product::where('ct','=',"s-".$cid)->get();
        }
        if($cid == 0){
             $products=product::where('ct','=','none')->get();
        }
        $brands= brand::where('status','=' ,'1')->get();
        $data = compact('brands','products');
        return view('frontend.section')->with($data);
    }
    // get single Product Detatils
    public function singleProduct(Request $req,$pid){
        $pname= str_replace('_',' ',$pid);
        $product= product::where('name',"LIKE","%".$pname."%")->take(1)->get();
        if(count($product) == 0){
            return redirect()->back();
        }
        $brand=brand::find($product[0]['brand']);
        $related=product::get()->all();
        $brandName=$brand['bname'];
        $data =compact('product','pname','brandName','related');
         return view('frontend.single')->with($data);
    }
}