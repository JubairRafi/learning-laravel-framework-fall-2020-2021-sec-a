<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\User;

class loginController extends Controller
{
   public function index(Request $req){
       return view('login.index');
   }
   public function verifyy(Request $req){
       $users=User::where('username', $req->username)
                   ->where('password', $req->password)
                   ->first();


        if(count((array)$users) > 0){
             $req->session()->put('username', $req->username);
            // $req->session()->put('type', $req->type);
                    
             return redirect()->route('home.index');
        }else{
             $req->session()->flash('msg', 'invalid username/password');
              return redirect('/login');
                    //return view('login.index');
            }
   }
}
