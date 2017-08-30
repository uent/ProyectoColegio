<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function composer()
    {
      echo "hola1";
      shell_exec('composer update');
      Artisan::call('optimize');
      echo "hola2";
    }
}
