<?php

namespace App\Http\Controllers;

use App\User;
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
    /*get information from users*/
    //  public function get(){
    //      return User::select('name')->get();/*we can add methode like just delete or update */
    //  }


}
