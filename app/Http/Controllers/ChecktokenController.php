<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ChecktokenController extends Controller
{	
	// construct()
	public function __construct(){
		$this->middleware('checktoken');
	}

	public function index()
    {	
    	// dd($id);die;
        return view('ceshi.index');
    }

}
