<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.index');
    }
}
