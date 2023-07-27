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
        $sname=$ct;
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
        $data = compact('brands', 'products','sname');
        return view('frontend.section')->with($data);
    }
    //get Sub category 
    public function getsubCategory(Request $req, $ct)
    {
        $ct = str_replace('_', ' ', $ct);
        $sname=$ct;
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
        $data = compact('brands', 'products','sname');
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
            $products = product::where('flash', "=", 1)->where('status', '=', 1)->get();
            $brands = brand::where('status', '=', '1')->get();
            $data = compact('brands', 'products','sname');
            return view('frontend.section')->with($data);
        } elseif ($sname == "new arrival") {
            $products = product::where('new', "=", 1)->where('status', '=', 1)->get();
            $brands = brand::where('status', '=', '1')->get();
            $data = compact('brands', 'products','sname');
            return view('frontend.section')->with($data);
        } elseif ($sname == "for you") {
            $products = product::where('status', '=', 1)->get();
            $brands = brand::where('status', '=', '1')->get();
            $data = compact('brands', 'products', 'sname');
            return view('frontend.section')->with($data);
        } else {
            $products = [];
            $brands = brand::where('status', '=', '1')->get();
            $data = compact('brands', 'products', 'sname');
            return view('frontend.section')->with($data);
        }
    }

    // filter Section 
    public function filter_section(Request $req)
    {
        $sname = $req->sname;
        $min = $req->min;
        if ($min == null || $min == "") {
            $min = 0;
        }
        $max = $req->max;
        if ($max == null || $max == "") {
            $max = 999999;
        }
        $brands = $req->brands;
        $brand = explode(",", $brands);
        if ($sname == "flash deals") {
            $products = product::where('flash', "=", 1)->where('status', '=', 1)->where('price', ">", $min)->where('price', '<', $max)->where(function ($q) use ($brand) {
                foreach ($brand as  $value) {
                    $q->orWhere("brand", '=', $value);
                }
            })->get();
        } elseif ($sname == "new arrival") {
            $products = product::where('new', "=", 1)->where('status', '=', 1)->where('price', ">", $min)->where('price', '<', $max)->where(function ($q) use ($brand) {
                foreach ($brand as  $value) {
                    $q->orWhere("brand", '=', $value);
                }
            })->get();
        } elseif ($sname == "for you") {
            $products = product::where('status', '=', 1)->where('price', ">", $min)->where('price', '<', $max)->where(function ($q) use ($brand) {
                foreach ($brand as  $value) {
                    $q->orWhere("brand", '=', $value);
                }
            })->get();
        }

            $data=' <div class="products ">';
            if(count($products)>0){
                $data.='<div class="grid grid-cols-3 gap-y-5">';
                foreach ($products as $item) {
                     $data.='<div class="pbbox shadow-md relative bg-white">
                    <div class="card p-3 shadow-md">
                        <figure><img
                                src="';
                                $data.=asset($item['pimg']);
                                $data.='"
                                alt="Shoes" /></figure>
                        <div class="card-body">
                            <div class="ptitle">
                                <a href="';
                                $data.='">';
                                $data.=$item['name'];
                                $data.='</a>
                            </div>
                            <div class="card_star">
                                <div class="single_star">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <div class="card-atctions flex justify-between items-center">
                                <div class="price_box flex text-ThemeColor">
                                    <div class="currency pe-2">
                                        <span>AED</span>
                                    </div>
                                    <div class="price">
                                        <span>';
                                        $data.=$item['price'];
                                        $data.='</span>
                                    </div>
                                </div>
                                <div class="atoCart border text-ThemeColor cursor-pointer" data-pid="';
                                $data.=$item['pid'];
                                $data.='">
                                    <span class="px-2 text-2xl">+</span>
                                </div>
                            </div>
                        </div>
                        <div class="view_heart">
                            <span class="view text-topbar">
                                <i class="fa-solid fa-eye"></i>
                            </span>
                            <span class="atfav text-ThemeColor">
                                <i class="fa-regular fa-heart"></i>
                            </span>
                        </div>
                    </div>

                </div>';
                }

            $data.='</div>';
            }
            else{
                 $data.='<div class="">
                <h1 class="text-center text-red-500">No Product Found !</h1>
                </div>';
            }

       $data.=' </div>
        <div class="result_count flex justify-between text-slate-500 text-[14px] p-4 mt-5">
            <p>Showing 1-';$data.=count($products);$data.=' of';
            $data.=count($products); $data.='Products</p>
            <div class="pagination flex text-[20px]">
                <div class="prev h-7 w-7 rounded-full border text-ThemeColor opacity-40 hover:opacity-100 border-ThemeColor flex justify-center items-center">
                    <a href=""><i class="fa-solid fa-angle-left"></i></a>
                </div>
                <div class="prev mx-3 next prev h-7 w-7 rounded-full border text-ThemeColor border-ThemeColor flex justify-center items-center">
                    <span class="">1</span>
                </div>
                <div class="next prev h-7 w-7 rounded-full border text-ThemeColor opacity-40 hover:opacity-100 border-ThemeColor flex justify-center items-center">
                    <a href=""><i class="fa-solid fa-angle-right"></i></a>
                </div>

            </div>
        </div>';
        echo $data;
    }
}
