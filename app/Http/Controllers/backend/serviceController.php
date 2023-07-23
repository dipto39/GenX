<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    // Show All services 

    public function index()
    {
        $service = service::get()->all();
        $data = compact('service');
        return view('backend.service')->with($data);
    }

    // add New service

    public function addservice()
    {
        $urll = '/admin/service/store';
        $btn = 'Add service';
        $data = compact('urll', 'btn');
        return view("backend.addservice")->with($data);
    }

    // Store services

    public function storeservice(Request $req)
    {
        $req->validate([
            'title' => "required",
            'sub_title' => "required",
            'service_img' => "required"
        ]);
        $table = new service();
        $table['title'] = $req['title'];
        $table['sub'] = $req['sub_title'];
        $table['img'] = $req['service_img'];

        if (!file_exists(public_path('assets/img/service'))) {
            mkdir(public_path('assets/img/service'), 0777, true);
        }


        if (!empty($req->service_img)) {

            $image = $req->service_img;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/service');
            $image->move($destination, $imagename);
            $table['img'] = 'assets/img/service/' . $imagename;
        }
        $table->save();
        return redirect()->route('services');
    }


    // Edit service

    public function editservice($id)
    {
        $urll = '/admin/service/update/' . $id;
        $btn = 'Update service';
        $svalue = service::find($id);
        $data = compact('urll', 'btn', 'svalue');
        return view("backend.addservice")->with($data);
    }

    // update Category 

    public function updateservice(Request $req, $id)
    {
        $req->validate([
            'title' => "required",
            'sub_title' => "required",
        ]);
        $table = service::find($id);
        $table['title'] = $req['title'];
        $table['sub'] = $req['sub_title'];

        if (!file_exists(public_path('assets/img/service'))) {
            mkdir(public_path('assets/img/service'), 0777, true);
        }


        if (!empty($req->service_img)) {

            $image = $req->service_img;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/img/service');
            $image->move($destination, $imagename);
            $table['img'] = 'assets/img/service/' . $imagename;
        }
        $table->update();
        return redirect()->route('services');
    }
    
    // Change service Status

    public function change_status(Request $req,$id){
        if($req->inactive){
            $table=service::find($id);
            $table['status'] = 1;
            $table->update();
            $data = json_encode(["status" => true]);
            echo $data;
        }
        if($req->active){
            $table=service::find($id);
            $table['status'] = 0;
            $table->update();
            $data = json_encode(["status" => false]);
            echo $data;
        }
        
    }

    // Delete Category

    public function deleteservice($id)
    {
        service::find($id)->delete();
        return redirect()->route('services');
    }
}
