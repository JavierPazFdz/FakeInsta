<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        dd('Cuenta creada');
    }
}
