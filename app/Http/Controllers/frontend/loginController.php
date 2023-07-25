<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\FullNameRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    public function index(){
        return view('frontend.login');
    }
    // Show Signup page
    public function signup(){
        return view('frontend.signup');
    }

    // Register new user 
    public function storeUser(Request $req){
        $req->validate([
            'Full_name' => ['required',new FullNameRule],
            'email'     => 'required|email',
            'password'  => 'min:6|required_with:Confirm_password|same:Confirm_password',
            'Confirm_password'  => 'required|min:6'
        ]);
        $table=new User();
        $table->name = $req->Full_name;
        $table->email = $req->email;
        $table->password = md5($req->password);
        
        $table->save();
        $data=User::find($table->id);
        $pp=$data['pp'];
        $name=$data['name'];
        session()->put("uid",$table->id);
        session()->put("pp",$pp);
        session()->put("name",$name);
        return redirect()->route('profile');
       
    }

    // login user
    public function loginUser(Request $req){

        $table = User::where(["email" => $req->email, "password" => md5($req->password)])->get();
        if (count($table) > 0) {
                $name = $table[0]['name'];

                session()->put("uid",$table[0]['id']);
                session()->put("pp",$table[0]['pp']);
                session()->put("name",$name);

                return redirect('/profile');
           
        } else {
            session()->flash("error", "Email or password not match");
            return redirect()->back();
        }
    }

    // lgoout user 
    public function logout(){
        session()->forget('uid');
        session()->forget('name');
        session()->forget('pp');
        return Redirect()->route('frontend_login');
    }
    
}
