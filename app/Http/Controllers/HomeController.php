<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function init()
    {
        if (Auth::guest()) {
            return redirect()->route('home');
        } else {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else if(Auth::user()->role == 'petugas'){
                return redirect()->route('petugas.dashboard');
            }
             else {
                return redirect()->route('masyarakat.dashboard');
            }
        }
    }
}
