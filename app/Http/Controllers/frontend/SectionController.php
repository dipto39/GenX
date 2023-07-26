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
    // get category
    public function getCategory(Request $req, $ct)
    {
        $ct = str_replace('_', ' ', $ct);
        $allcata = category::get()->all();
        $cid = 0;
        foreach ($allcata as  $value) {
            if ($value['cname'] == $ct) {
                $cid = $value['id'];
            }
        }
        $allsubcata = Subcategories::where('cid', '=', $cid)->get();
        $subcid = [];
        foreach ($allsubcata as  $value) {
            array_push($subcid, ["ct" => "s-" . $value['sid']]);
        }
        $products = product::where('status', '=', 1)->where('ct', $cid)->orWhere(function ($q) use ($subcid) {
            foreach ($subcid as  $value) {
                $q->orWhere("ct", '=', $value);
            }
        })->get();
        $brands = brand::where('status', '=', '1')->get();
        $data = compact('brands', 'products');
        return view('frontend.section')->with($data);
    }
    //get Sub category 
    public function getsubCategory(Request $req, $ct)
    {
        $ct = str_replace('_', ' ', $ct);
        $allcata = category::get()->all();
        $cid = 0;
        $allcata = Subcategories::get()->all();
        foreach ($allcata as $value) {
            if ($value['subcname'] == $ct) {
                $cid = $value['sid'];
            }
        }
        $products = product::where('ct', '=', "s-" . $cid)->get();
        if ($cid == 0) {
            $products = product::where('ct', '=', 'none')->get();
        }
        $brands = brand::where('status', '=', '1')->get();
        $data = compact('brands', 'products');
        return view('frontend.section')->with($data);
    }
    // get single Product Detatils
    public function singleProduct(Request $req, $pid)
    {
        $pname = str_replace('_', ' ', $pid);
        $product = product::where('name', "LIKE", "%" . $pname . "%")->take(1)->get();
        if (count($product) == 0) {
            return redirect()->back();
        }
        $brand = brand::find($product[0]['brand']);
        $related = product::get()->all();
        $brandName = $brand['bname'];
        $data = compact('product', 'pname', 'brandName', 'related');
        return view('frontend.single')->with($data);
    }
    // section View
    public function showSection(Request $req, $name)
    {
        $sname = str_replace('_', ' ', $name);
        if ($sname == "flash deals") {
            $products = product::where('flash', "=", 1)->where('status','=',1)->get();
            $brands = brand::where('status', '=', '1')->get();
            $data = compact('brands', 'products');
            return view('frontend.section')->with($data);
        }
        if ($sname == "new arrival") {
            $products = product::where('new', "=", 1)->where('status','=',1)->get();
            $brands = brand::where('status', '=', '1')->get();
            $data = compact('brands', 'products');
            return view('frontend.section')->with($data);
        }
        if ($sname == "for you") {
            $products = product::where('status','=',1)->get();
            $brands = brand::where('status', '=', '1')->get();
            $data = compact('brands', 'products');
            return view('frontend.section')->with($data);
        }
    }
}
