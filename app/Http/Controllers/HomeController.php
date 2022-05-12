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
        $this->middleware('auth')->only(['favs', 'testdrive', 'calemi']);
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

    public function search()
    {
        return view('home');
    }

    public function cardetail()
    {
        return view('details');
    }

    public function favs()
    {
        return view('home');
    }

    public function testdrive()
    {
        return view('testdrive');
    }

    public function calemi()
    {
        return view('calemi');
    }

    public function testdrivesbooked(){
        return view('testdrives');
    }
}
