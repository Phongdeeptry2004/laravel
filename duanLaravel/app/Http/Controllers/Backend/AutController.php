<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutController extends Controller
{
    public function __construct()
    {
        
    }
    public function login(){
      return view("backend.auth.login");
    }
}
