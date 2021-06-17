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

    public function ajukan()
    {
        return view('form-ajukan');
    }

    public function lapor()
    {
        return view('form-lapor');
    }

    public function pengaduan()
    {
        return view('form-pengaduan');
    }

    public function berlangganan()
    {
        return view('form-berlangganan');
    }

    
}
