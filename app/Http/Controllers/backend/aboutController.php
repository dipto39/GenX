<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class aboutController extends Controller
{
        // Show All about 

        public function index()
        {
            $about = about::get()->all();
            $data = compact('about');
            return view('backend.about')->with($data);
        }
    
        // add New about
    
        public function addabout()
        {
            $urll = '/admin/about/store';
            $btn = 'Add about';
            $data = compact('urll', 'btn');
            return view("backend.addabout")->with($data);
        }
    
        // Store about
    
        public function storeabout(Request $req)
        {
            $req->validate([
                'title' => "required",
                'description' => "required"
            ]);
            $table = new about();
            $table['title'] = $req['title'];
            $table['des'] = $req['description'];
    
          
            $table->save();
            return redirect()->route('about');
        }
    
    
        // Edit about
    
        public function editabout($id)
        {
            $urll = '/admin/about/update/' . $id;
            $btn = 'Update about';
            $value = about::find($id);
            $data = compact('urll', 'btn', 'value');
            return view("backend.addabout")->with($data);
        }
    
        // update Category 
    
        public function updateabout(Request $req, $id)
        {
            $req->validate([
                'title' => "required",
                'description' => "required"
            ]);
            $table = about::find($id);
            $table['title'] = $req['title'];
            $table['des'] = $req['description'];
    
    
            
            $table->update();
            return redirect()->route('about');
        }
        
        // Change about Status
    
        public function change_status(Request $req,$id){
            if($req->inactive){
                $table=about::find($id);
                $table['status'] = 1;
                $table->update();
                $data = json_encode(["status" => true]);
                echo $data;
            }
            if($req->active){
                $table=about::find($id);
                $table['status'] = 0;
                $table->update();
                $data = json_encode(["status" => false]);
                echo $data;
            }
            
        }
    
        // Delete Category
    
        public function deleteabout($id)
        {
            about::find($id)->delete();
            return redirect()->route('about');
        }
}
