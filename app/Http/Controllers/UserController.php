<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(){
        return view('users.login');
    }
    public function loginAuth(Request $req){
        $user = User::where(['email' => $req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            
            return "Username or password is not matched";

        }
        else{
            $req->session()->put('user', $user);
            return redirect('/')->with('message', 'login successful');
        }
    }
    public function register(){
        return view('users.register');
    }
    public function store(Request $req){

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/')->with('message', 'Registration successful');

    }
}
