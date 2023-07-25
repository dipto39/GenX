<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\setting;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class settingController extends Controller
{
    public function index(){
        $setting = setting::get()->all();
        $addpass = admin::get()->all();
       if(count($setting)>0){
        $id = $setting[0]['id'];
        $urll ='/admin/setting/update/'.$id;
       }else{
        $urll ="";
       }
        $data= compact('setting','urll','addpass');
        return view('backend.setting')->with($data);
    }

    // Store Setting Data

    public function storeSetting(Request $req){
        $req->validate([
            'name' => 'required',
            'title' => 'required',
            'primary_email' => 'required',
            'primary_phone' => 'required',
            'currency' => 'required',
            'symbol' => 'required',
            'site_url' => 'required',
            'logo' => 'required',
        ]);
        $table = new setting();
        $table->cn = $req->name;
        $table->title = $req->title;
        $table->pe = $req->primary_email;

        $table->se = $req->secondary_email;

        $table->pp = $req->primary_phone;

        $table->sp = $req->secondary_phone;

        $table->cu = $req->currency;
        $table->cs = $req->symbol;
        $table->sc = $req->charge;
        $table->vat = $req->vat;
        $table->su = $req->site_url;
        if (!file_exists(public_path('assets/logo'))) {
            mkdir(public_path('assets/logo'), 0777, true);
        }


        if (!empty($req->logo)) {

            $image = $req->logo;
            $name = $image->getClientOriginalName();
            $imagename = time() . "_" . $name;
            $destination = public_path('assets/logo');
            $image->move($destination, $imagename);
            $table['logo'] = 'assets/logo/' . $imagename;
        }
        $table->save();
        return redirect()->route('setting');
    }

        // Update Setting Data

        public function updateSetting(Request $req,$id){
            $req->validate([
                'name' => 'required',
                'title' => 'required',
                'primary_email' => 'required',
                'primary_phone' => 'required',
                'currency' => 'required',
                'symbol' => 'required',
                'site_url' => 'required',
            ]);
            $table = setting::find($id);
            $table->cn = $req->name;
            $table->title = $req->title;
            $table->pe = $req->primary_email;
    
            $table->se = $req->secondary_email;
    
            $table->pp = $req->primary_phone;
    
            $table->sp = $req->secondary_phone;
    
            $table->cu = $req->currency;
            $table->cs = $req->symbol;
            $table->sc = $req->Charge;
            $table->vat = $req->vat;
            $table->su = $req->site_url;
            if (!file_exists(public_path('assets/logo'))) {
                mkdir(public_path('assets/logo'), 0777, true);
            }
    
    
            if (!empty($req->logo)) {
    
                $image = $req->logo;
                $name = $image->getClientOriginalName();
                $imagename = time() . "_" . $name;
                $destination = public_path('assets/logo');
                $image->move($destination, $imagename);
                $table['logo'] = 'assets/logo/' . $imagename;
            }
            $table->update();
            return redirect()->route('setting');
        }

        // update password
        public function updatepass(Request $req,$id){
            $req->validate([
                'opass' => 'required',
                'npass' => 'required|min:6',
                'conpass' => 'required|min:6',
            ]);
            
            $table=admin::find($id);
            if(!$req->npass == $req->conpass){
                session()->flash("error", "New password and Confirm password Not match");
                return redirect()->back();
            }else{
               $pass = $table['pass'];
               if($pass === $req->opass){
                $table->pass = $req->npass;
                $table->update();
                return redirect()->back();
               }else{
                session()->flash("error", "Worong Password");
                return redirect()->back();
               }
            }
            

        }
}

