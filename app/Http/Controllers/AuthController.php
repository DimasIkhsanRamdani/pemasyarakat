<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getRegister(Request $request)
    {
    return view('auth.register');
    }
    public function postRegister(Request $request)
    {
      // code...
    }
}
