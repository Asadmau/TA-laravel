<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class mainController extends Controller
{
    public function login(Request $req)
    {
        // adminsufee@gmail.com
        if (!\Auth::attempt(['namaUser' => $req->nama, 'password' => $req->password])) {
            # code...
            return redirect()->back();
        }
        return redirect()->route('dashboard');
    }
    public function register(Request $req){
        // $validator = Validator::make($req->all(), [
        //     'email' => 'required|email',
        //     'password' => 'required|min:6',
        //     'role' => 'required|max:16'
        // ]);
        // if ($validator->fails()) {
        //     # code...
        // }
        User::create([
            "id" => Str::random(30),
            "username" => $req->username,
            "email" => $req->email,
            "password" => bcrypt($req->password),
            "role" => $req->role
        ]);
        return redirect()->back();
    }
    public function logout()
    {
        # code...
        \Auth::logout();
        return redirect()->route('login');

    }
}
