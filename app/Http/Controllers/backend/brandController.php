<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\category;
use Illuminate\Http\Request;

class brandController extends Controller
{
    // Show All Brands 

    public function index()
    {
        $brands = brand::get()->all();
        $data = compact('brands');
        return view('backend.brands')->with($data);
    }

    // add New Brand

    public function addbrand()
    {
        $urll = '/admin/brands/store';
        $btn = 'Add Brands';
        $data = compact('urll', 'btn');
        return view("backend.addbrand")->with($data);
    }

    // Store Brands

    public function storebrand(Request $req)
    {
        $req->validate([
            'brand_name' => "required",
            'brand_img' => "required"
        ]);
        $table = new brand();
        $table['bname'] = $req['brand_name'];

        if (!file_exists(public_path('assets/img/brand'))) {
            mkdir(public_path('assets/img/brand'), 0777, true);
        }


        if (!empty($req->brand_img)) {

            $image = $req->brand_img;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/brand');
            $image->move($destination, $imagename);
            $table['bimg'] = 'assets/img/brand/' . $imagename;
        }
        $table->save();
        return redirect()->route('brands');
    }


    // Edit Brand

    public function editbrand($id)
    {
        $urll = '/admin/brands/update/' . $id;
        $btn = 'Update Brand';
        $bvalue = brand::find($id);
        $data = compact('urll', 'btn', 'bvalue');
        return view("backend.addbrand")->with($data);
    }

    // update Category 

    public function updatebrand(Request $req, $id)
    {
        $req->validate([
            'brand_name' => "required",
            'brand_img' => "required"
        ]);
        $table = brand::find($id);
        $table['bname'] = $req['brand_name'];

        if (!file_exists(public_path('assets/img/brand'))) {
            mkdir(public_path('assets/img/brand'), 0777, true);
        }


        if (!empty($req->brand_img)) {

            $image = $req->brand_img;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/brand');
            $image->move($destination, $imagename);
            $table['bimg'] = 'assets/img/brand/' . $imagename;
        }

        $table->update();
        return redirect()->route('brands');
    }
    
    // Change Brand Status

    public function change_status(Request $req,$id){
        if($req->inactive){
            $table=brand::find($id);
            $table['status'] = 1;
            $table->update();
            $data = json_encode(["status" => true]);
            echo $data;
        }
        if($req->active){
            $table=brand::find($id);
            $table['status'] = 0;
            $table->update();
            $data = json_encode(["status" => false]);
            echo $data;
        }
        
    }

    // Delete Category

    public function deletebrand($id)
    {
        brand::find($id)->delete();
        return redirect()->route('brands');
    }
}
