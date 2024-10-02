<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(){
        return view('account');
    }
    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'userName'=>'required|unique:users',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:4|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'userName'=>$request->userName,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
    }
}
