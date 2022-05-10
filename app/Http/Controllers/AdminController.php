<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin.home');
    }
    public function login(){
        return view('pages.admin.login');
    }
    public function table(){
        return view('pages.admin.table');
    }
}
