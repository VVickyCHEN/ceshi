<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {	
    	// 传给中间件参数admin
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.home');
    }
}