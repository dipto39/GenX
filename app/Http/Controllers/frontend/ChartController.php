<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\orderdetail;
use App\Models\product;
use App\Models\provider;
use App\Models\setting;
use App\Models\shipping;
use Illuminate\Http\Request;

class ChartController extends Controller
{
   public function index(){
    return view('frontend.cart');
   }
   // checkout Route
   public function checkout(){
      $shipping=shipping::get()->all();
      $providers=provider::get()->all();
      $tax=setting::get()->all();
      $cartData=json_decode($_COOKIE['cart'],true);
      if(count($cartData) > 0){
         $subtotal=0;
         $products=product::where('status','=','1')->get();
            foreach ($cartData as $value) {
               foreach ($products as $value2) {
                  if($value2['pid'] == $value['productId'])
                 $subtotal = $subtotal+($value2['price'] * $value['quant']);
               }
            }
            if( $tax[0]['vat'] > 0){
                 $taxval=($subtotal/100)* $tax[0]['vat'];
            }else{
               $taxval=0;
            }
          
         $data = compact('shipping','providers','tax','cartData','subtotal','taxval');
         return view('frontend.checkout')->with($data);
         
      }else{
         return redirect()->back();
      }
      
   }

   // get Shipping charge
   public function getShipping(Request $req){
         $id = $req->id;
         $country = shipping::find($id);
         $charge = $country['sc'];
         $shipping=shipping::get()->all();
         $providers=provider::get()->all();
         $tax=setting::get()->all();
         $cartData=json_decode($_COOKIE['cart'],true);
            $subtotal=0;
            $products=product::where('status','=','1')->get();
               foreach ($cartData as $value) {
                  foreach ($products as $value2) {
                     if($value2['pid'] == $value['productId'])
                    $subtotal = $subtotal+($value2['price'] * $value['quant']);
                  }
               }
               if( $tax[0]['vat'] > 0){
                    $taxval=($subtotal/100)* $tax[0]['vat'];
               }else{
                  $taxval=0;
               }
               $data='<div class="rounded-md bg-white p-4 ">
               <div class=" flex justify-between py-2">
                   <p class="text-slate-300">Subtotal : </p>
                   <h1>';
                    $data.=$subtotal;   
                   $data.='</h1>
               </div>
               <div class=" flex justify-between py-2">
                   <p class="text-slate-300">Shipping : </p>
                   <h1>';
                   $data.=$charge;
                   $data.='</h1>
               </div>
               <div class=" flex justify-between py-2">
                   <p class="text-slate-300">Tax : </p>
                   <h1>';
                   $data.=$taxval;
                   $data.='</h1>
               </div>
               <div class=" flex justify-between py-2">
                   <p class="text-slate-300">Discount : </p>
                   <h1>0</h1>
               </div>
               <h1 class="text-3xl float-right py-4">AED';
               $data.=$subtotal+$charge+$taxval;
               $data.='</h1>
               <label for="">
                   <input class="w-full p-2 border my-2 mb-4 outline-none rounded-md"
                       type="text">
               </label>
               <button class="bg-ThemeColor text-white w-full py-2">Apply Voucher</button>
           </div>';
       echo $data;
   }
      // get Shipping charge
      public function getPaymentMethod(Request $req){
         $id = $req->id;
         $country = shipping::find($id);
         if($country['cod'] == 1){
             $data=' <div class="flex items-center">
             <input name="paym" type="radio" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
             <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">COD</label>
         </div>
         <div class="flex items-center">
             <input name="paym" type="radio" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
             <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">Stripe</label>
         </div>
         <div class="flex items-center">
             <input name="paym" type="radio" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
             <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">Paypal</label>
         </div> 
         <input class="bg-ThemeColor px-4 py-2 mt-5 rounded-md text-white" type="submit" value="Process with COD">';
         }else{
            $data='
        <div class="flex items-center">
            <input name="paym" type="radio" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">Stripe</label>
        </div>
        <div class="flex items-center">
            <input name="paym" type="radio" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checked-checkbox" class="ml-5 text-sm font-medium text-gray-900 dark:text-gray-700">Paypal</label>
        </div>
        <input class="bg-ThemeColor px-4 py-2 mt-5 rounded-md text-white" type="submit" value="Process with COD">';
         }
              
       echo $data;
   }
   // place order
   public function postcheckout(Request $req){
      $req->validate([
         'name' => 'required',
         'phone' => 'required',
         'address' => 'required',
         'zip_code' => 'required|numeric',
         'country' => 'required',
         'state' => 'required',
         'city' => 'required',
         'provider' => 'required',
         'paym' => 'required',
      ]);
      $id = $req->country;
      $country = shipping::find($id);
      $charge = $country['sc'];
      $shipping=shipping::get()->all();
      $providers=provider::get()->all();
      $tax=setting::get()->all();
      $cartData=json_decode($_COOKIE['cart'],true);
         $subtotal=0;
         $p_and_q="";
         $products=product::where('status','=','1')->get();
            foreach ($cartData as $value) {
               foreach ($products as $value2) {
                  if($value2['pid'] == $value['productId'])
                  $p_and_q .=$value2['pid'].",".$value['quant']."_";
                 $subtotal = $subtotal+($value2['price'] * $value['quant']);
               }
            }
            if( $tax[0]['vat'] > 0){
                 $taxval=($subtotal/100)* $tax[0]['vat'];
            }else{
               $taxval=0;
            }
            $discount=0;
      $order = new order();
      $order->uid = session()->get('uid');
      $order->pid = $p_and_q;
      $order->pm = $req->paym;
      $order->save();
      $orderid=$order->id;
      $oid=order::find($orderid);
      $odetails=new orderdetail();
      $odetails->oid = $oid['orid'];
      $odetails->phn = $req->phone;
      $odetails->name = $req->name;
      $odetails->cid = $req->country;
      $odetails->state = $req->state;
      $odetails->zip = $req->zip_code;
      $odetails->sipro = $req->provider;
      if(!empty($req->preferable_date)){
            $odetails->pdate = $req->preferable_date;
      }
      if(!empty($req->preferable_time)){
         $odetails->ptime = $req->preferable_time;
      }
      $odetails->tex = $taxval;
      $odetails->charge = $charge;
      $odetails->discount = $discount;
      $odetails->subt = $subtotal;
      $odetails->address = $req->address;
      $odetails->save();
      unset($_COOKIE['cart']);
      return redirect()->route('frontend_orders');
   }

}
