<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
}
