<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
     public function login(Request $request){
         $au = $request->validate([
            'email' => ['required','email']
        ,'password' => ['required'] 
        ]);
        if (Auth::attempt($au)) {
           $request->session()->regenerate();
           $user = Auth::user();
               return redirect()->intended('/');
        }else{
                 return redirect()->back()->with('error','Information incorrecte');
        }
    }
    public function show(){
        return view('register');
    }
    public function showl(){
        return view('login');
    }
    public function register( User $user , AddUserRequest $request  ){
        $user->first_name = $request->prenom;
        $user->last_name = $request->nom;
        $user->phone = $request->contact;
        $user->email = $request->email;
        $user->city_id = $request->ville;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login')->with('success','Compte ajouté');
    }
     public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
