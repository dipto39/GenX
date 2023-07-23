<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\slider;
use Illuminate\Http\Request;

class sliderController extends Controller
{
         // Show All sliders 

         public function index()
         {
             $sliders = slider::get()->all();
             $data = compact('sliders');
             return view('backend.sliders')->with($data);
         }
     
         // add New slider
     
         public function addslider()
         {
             $urll = '/admin/slider/store';
             $products = product::get()->all();
             $btn = 'Add sliders';
             $data = compact('urll', 'btn','products');
             return view("backend.addslider")->with($data);
         }
     
         // Store sliders
     
         public function storeslider(Request $req)
         {
             $req->validate([
                 'title' => "required",
                 'subtitle' => "required",
                 'slider_img' => "required",
                 'product' => "required",
             ]);
             $table = new slider();
             $table['title'] = $req['title'];
             $table['sub'] = $req['subtitle'];
             $table['img'] = $req['slider_img'];
             $table['pid'] = $req['product'];
            
               
             if (!file_exists(public_path('assets/img/slider'))) {
                 mkdir(public_path('assets/img/slider'), 0777, true);
             }
     
     
             if (!empty($req->slider_img)) {
     
                 $image = $req->slider_img;
                 $name = $image->getClientOriginalName();
                 $imagename = time() . "_" . $name;
                 $destination = public_path('assets/img/slider');
                 $image->move($destination, $imagename);
                 $table['img'] = 'assets/img/slider/' . $imagename;
             }
             $table->save();
             return redirect()->route('sliders');
         }
     
     
         // Edit slider
     
         public function editslider($id)
         {
             $urll = '/admin/slider/update/' . $id;
             $btn = 'Update slider';
             $svalue = slider::find($id);
             $products = product::get()->all();
             $data = compact('urll', 'btn','products','svalue');
             return view("backend.addslider")->with($data);
         }
     
         // update Category 
     
         public function updateslider(Request $req, $id)
         {
            $req->validate([
                'title' => "required",
                'subtitle' => "required",
                'product' => "required",
            ]);
            $table = slider::find($id);
            $table['title'] = $req['title'];
            $table['sub'] = $req['subtitle'];
            $table['pid'] = $req['product'];
           
              
            if (!file_exists(public_path('assets/img/slider'))) {
                mkdir(public_path('assets/img/slider'), 0777, true);
            }
    
    
            if (!empty($req->slider_img)) {
    
                $image = $req->slider_img;
                $name = $image->getClientOriginalName();
                $imagename = time() . "_" . $name;
                $destination = public_path('assets/img/slider');
                $image->move($destination, $imagename);
                $table['img'] = 'assets/img/slider/' . $imagename;
            }
     
             $table->update();
             return redirect()->route('sliders');
         }
         
         // Change slider Status
     
         public function change_status(Request $req,$id){
             if($req->inactive){
                 $table=slider::find($id);
                 $table['status'] = 1;
                 $table->update();
                 $data = json_encode(["status" => true]);
                 echo $data;
             }
             if($req->active){
                 $table=slider::find($id);
                 $table['status'] = 0;
                 $table->update();
                 $data = json_encode(["status" => false]);
                 echo $data;
             }
             
         }
     
         // Delete Category
     
         public function deleteslider($id)
         {
             slider::find($id)->delete();
             return redirect()->route('sliders');
         }
}
