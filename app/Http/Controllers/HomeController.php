<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('web/home');
    }

    public function about()
    {
        return View('web/about');
    }

    public function contact()
    {
        return View('web/contact');
    }

    public function blog()
    {
        return View('web/blog');
    }

    public function gallery()
    {
        return View('web/gallery');
    }
    public function team()
    {
        return View('web/team');
    }
}
