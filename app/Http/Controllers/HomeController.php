<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*HERE TO ACCES TO FUNCTION U NEED TO AUTH */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gethome(){
        return view('/teacherspace/dashboard');
    }
    public function index()
    {
        return view('auth.login');
    }

}
