<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(){
        return view('account');
    }
    public function store(Request $request){
        //Modificar Request
        $request->request->add([
            'userName'=>Str::slug($request->userName)
        ]);

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

        //Autentificacion de usuario por mail y pass
        auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        //Otra forma en una linea
        // auth()->attempt($request->only('email', 'password'));

        //Redireccion
        return redirect()->route('post.index');
    }
}
