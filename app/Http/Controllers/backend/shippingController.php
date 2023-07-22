<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\shipping;
use Illuminate\Http\Request;

class shippingController extends Controller
{
    // Show All shipping 

    public function index()
    {
        $shipping = shipping::get()->all();
        $data = compact('shipping');
        return view('backend.shippingCharge')->with($data);
    }

    // add New shipping

    public function addshipping()
    {
        $urll = '/admin/shipping/store';
        $btn = 'Add shipping';
        $data = compact('urll', 'btn');
        return view("backend.addShipping")->with($data);
    }

    // Store shipping

    public function storeshipping(Request $req)
    {
        $req->validate([
            'name' => "required",
            'shipping_charge' => "required"
        ]);
        $table = new shipping();
        $table['cname'] = $req['name'];
        $table['sc'] = $req['shipping_charge'];
        if(!empty($req->cod)){
            $table['cod'] = 1;
        }

        $table->save();
        return redirect()->route('shipping');
    }


    // Edit shipping

    public function editshipping($id)
    {
        $urll = '/admin/shipping/update/'. $id;
        $btn = 'Update shipping';
        $svalue = shipping::find($id);
        $data = compact('urll', 'btn', 'svalue');
        return view("backend.addShipping")->with($data);
    }

    // update Category 

    public function updateshipping(Request $req, $id)
    {
        $req->validate([
            'name' => "required",
            'shipping_charge' => "required"
        ]);
        $table = shipping::find($id);
        $table['cname'] = $req['name'];
        $table['sc'] = $req['shipping_charge'];
        if(!empty($req->cod)){
            $table['cod'] = 1;
        }else{
            $table['cod'] = 0;
        }

        $table->update();
        return redirect()->route('shipping');
    }
    
    // Change shipping Status

    public function change_allowcod(Request $req,$id){
        if($req->inactive){
            $table=shipping::find($id);
            $table['cod'] = 1;
            $table->update();
            $data = json_encode(["cod" => true]);
            echo $data;
        }
        if($req->active){
            $table=shipping::find($id);
            $table['cod'] = 0;
            $table->update();
            $data = json_encode(["cod" => false]);
            echo $data;
        }
        
    }




}
