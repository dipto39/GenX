<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{
    public function index(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        $adata = admin::get()->all();
        if($adata[0]['em'] == $req->email && $adata[0]['pass'] == $req->password){
            session()->put("email", 1);
            return redirect()->route('dashboard');
        }else{
            session()->flash("error", "Email or password not match");
            return redirect()->back();
        }
    }
    public function logout(){
        
        session()->forget('email');
        session()->save() ;
        return redirect('/admin/login');

    }
}
