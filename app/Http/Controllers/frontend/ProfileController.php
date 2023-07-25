<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index(){
    $pdata=User::find(session()->get('uid'));
    $data = compact('pdata');
    return view('frontend.profile')->with($data);
   }
}
