<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\coupon;
use Illuminate\Http\Request;

class couponController extends Controller
{
     // Show All coupons 

     public function index()
     {
         $coupons = coupon::get()->all();
         $data = compact('coupons');
         return view('backend.coupone')->with($data);
     }
 
     // add New coupon
 
     public function addcoupon()
     {
         $urll = '/admin/coupon/store';
         $btn = 'Add coupons';
         $data = compact('urll', 'btn');
         return view("backend.addcoupon")->with($data);
     }
 
     // Store coupons
 
     public function storecoupon(Request $req)
     {
         $req->validate([
             'name' => "required",
             'code' => "required",
             'value' => "required|numeric",
             'min_spend' => "required|numeric",
             'start_date' => "required",
             'end_date' => "required"
         ]);
         $table = new coupon();
         $table['cn'] = $req['name'];
         $table['cd'] = $req['code'];
         $table['vl'] = $req['value'];
         $table['ms'] = $req['min_spend'];
         $table['sd'] = $req['start_date'];
         $table['ed'] = $req['end_date'];
       
         $table->save();
         return redirect()->route('coupons');
     }
 
 
     // Edit coupon
 
     public function editcoupon($id)
     {
         $urll = '/admin/coupon/update/' . $id;
         $btn = 'Update coupon';
         $value = coupon::find($id);
         $data = compact('urll', 'btn', 'value');
         return view("backend.addcoupon")->with($data);
     }
 
     // update Category 
 
     public function updatecoupon(Request $req, $id)
     {
        $req->validate([
            'name' => "required",
            'code' => "required",
            'value' => "required|numeric",
            'min_spend' => "required|numeric",
            'start_date' => "required",
            'end_date' => "required"
        ]);
        $table = coupon::find($id);
        $table['cn'] = $req['name'];
        $table['cd'] = $req['code'];
        $table['vl'] = $req['value'];
        $table['ms'] = $req['min_spend'];
        $table['sd'] = $req['start_date'];
        $table['ed'] = $req['end_date'];
         $table->update();
         return redirect()->route('coupons');
     }
     
     // Change coupon Status
 
     public function change_status(Request $req,$id){
         if($req->inactive){
             $table=coupon::find($id);
             $table['st'] = 1;
             $table->update();
             $data = json_encode(["status" => true]);
             echo $data;
         }
         if($req->active){
             $table=coupon::find($id);
             $table['st'] = 0;
             $table->update();
             $data = json_encode(["status" => false]);
             echo $data;
         }
         
     }
 
     // Delete Category
 
     public function deletecoupon($id)
     {
         coupon::find($id)->delete();
         return redirect()->route('coupons');
     }
}
