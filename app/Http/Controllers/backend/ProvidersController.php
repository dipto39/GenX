<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\provider;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
     // Show All providers 

     public function index()
     {
         $providers = provider::get()->all();
         $data = compact('providers');
         return view('backend.shippingProviders')->with($data);
     }
 
     // add New provider
 
     public function addprovider()
     {
         $urll = '/admin/provider/store';
         $btn = 'Add providers';
         $data = compact('urll', 'btn');
         return view("backend.addprovider")->with($data);
     }
 
     // Store providers
 
     public function storeprovider(Request $req)
     {
         $req->validate([
             'provider_name' => "required",
         ]);
         $table = new provider();
         $table['pname'] = $req['provider_name'];
         if(!empty($req->outside)){
         $table['out'] = $req['outside'];
         }
         if(!empty($req->in_UAE)){
            $table['in'] = $req['in_UAE'];
            }
           
         if (!file_exists(public_path('assets/img/provider'))) {
             mkdir(public_path('assets/img/provider'), 0777, true);
         }
 
 
         if (!empty($req->provider_img)) {
 
             $image = $req->provider_img;
             $name = $image->getClientOriginalName();
             $imagename = time() . "_" . $name;
             $destination = public_path('assets/img/provider');
             $image->move($destination, $imagename);
             $table['img'] = 'assets/img/provider/' . $imagename;
         }
         $table->save();
         return redirect()->route('providers');
     }
 
 
     // Edit provider
 
     public function editprovider($id)
     {
         $urll = '/admin/provider/update/' . $id;
         $btn = 'Update provider';
         $pvalue = provider::find($id);
         $data = compact('urll', 'btn', 'pvalue');
         return view("backend.addprovider")->with($data);
     }
 
     // update Category 
 
     public function updateprovider(Request $req, $id)
     {
        $req->validate([
            'provider_name' => "required",
        ]);
        $table = provider::find($id);
        $table['pname'] = $req['provider_name'];
        if(!empty($req->outside)){
        $table['out'] = $req['outside'];
        }
        if(!empty($req->in_UAE)){
           $table['in'] = $req['in_UAE'];
           }
          
        if (!file_exists(public_path('assets/img/provider'))) {
            mkdir(public_path('assets/img/provider'), 0777, true);
        }


        if (!empty($req->provider_img)) {

            $image = $req->provider_img;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/provider');
            $image->move($destination, $imagename);
            $table['img'] = 'assets/img/provider/' . $imagename;
        }
 
         $table->update();
         return redirect()->route('providers');
     }
     
     // Change provider Status
 
     public function change_status(Request $req,$id){
         if($req->inactive){
             $table=provider::find($id);
             $table['status'] = 1;
             $table->update();
             $data = json_encode(["status" => true]);
             echo $data;
         }
         if($req->active){
             $table=provider::find($id);
             $table['status'] = 0;
             $table->update();
             $data = json_encode(["status" => false]);
             echo $data;
         }
         
     }
 
     // Delete Category
 
     public function deleteprovider($id)
     {
         provider::find($id)->delete();
         return redirect()->route('providers');
     }
}
