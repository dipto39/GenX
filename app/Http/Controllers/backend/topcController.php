<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\tcata;
use Illuminate\Http\Request;

class topcController extends Controller
{
  
         // Show All Top Category 

         public function index()
         {
             $topcategory = tcata::get()->all();
             $categories=category::get()->all();
             if(count($topcategory) > 0){ 
                $urll = '/admin/topcategory/update/'.$topcategory[0]['id'];
                $data = compact('urll','topcategory','categories');
                 return view('backend.topcategory')->with($data);
             }else{
                $urll = '/admin/topcategory/store';
                $data = compact('urll','categories');
                return view('backend.topcategory')->with($data);
             }
           
            
         }
     
         
         // Store Tcategory
     
         public function storetcategory(Request $req)
         {
             $req->validate([
                 'category1' => "required",
                 'category2' => "required",
                 'category3' => "required",
             ]);
             $table = new tcata();
             $table['c1'] = $req['category1'];
             $table['c2'] = $req['category2'];
             $table['c3'] = $req['category3'];
               
            
             $table->save();
             return redirect()->route('topCategory');
         }
     
    
         // update TCategory 
     
         public function updatetcategory(Request $req, $id)
         {
            $req->validate([
                'category1' => "required",
                'category2' => "required",
                'category3' => "required"
            ]);
            $table =tcata::find($id);
            $table['c1'] = $req['category1'];
            $table['c2'] = $req['category2'];
            $table['c3'] = $req['category3'];
              
           
     
             $table->update();
             return redirect()->route('topCategory');
         }
         
      
}
