<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCotroller extends Controller
{
    public function index(){
        return view('pages.login');
    }
}
