<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckroleController extends Controller
{
    public function __construct(){
    	// 中间件:参数
    	$this->middleware('checkrole:editor');
    }
}
