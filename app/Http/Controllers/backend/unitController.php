<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\unit;
use Illuminate\Http\Request;

class unitController extends Controller
{
   // Show All unit 

   public function index()
   {
       $unit = unit::get()->all();
       $data = compact('unit');
       return view('backend.units')->with($data);
   }

//    add New unit

   public function addunit()
   {
       $urll = '/admin/unit/store';
       $btn = 'Add unit';
       $data = compact('urll', 'btn');
       return view("backend.addunit")->with($data);
   }

   // Store unit

   public function storeunit(Request $req)
   {
       $req->validate([
           'name' => "required",
       ]);
       $table = new unit();
       $table['uname'] = $req['name'];

     
       $table->save();
       return redirect()->route('units');
   }


   // Edit unit

   public function editunit($id)
   {
       $urll = '/admin/unit/update/' . $id;
       $btn = 'Update unit';
       $value = unit::find($id);
       $data = compact('urll', 'btn', 'value');
       return view("backend.addunit")->with($data);
   }

   // update Category 

   public function updateunit(Request $req, $id)
   {
       $req->validate([
           'name' => "required",
       ]);
       $table = unit::find($id);
       $table['uname'] = $req['name'];


       
       $table->update();
       return redirect()->route('units');
   }


   // Delete Category

   public function deleteunit($id)
   {
       unit::find($id)->delete();
       return redirect()->route('units');
   }
}
