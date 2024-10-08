<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email'=> 'required|email',
            'password'=>'required|confirmed'
        ]);
        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('menssage', 'credenciales incorrectas');
        }
        return redirect('post.index');

    }
}
