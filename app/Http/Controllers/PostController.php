<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       return redirect()->route('post.index');
    }
}
