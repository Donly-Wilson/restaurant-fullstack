<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu/index');
    }

    public function singlemenu()
    {
        return view('menu/single-menu');
    }

    public function reservations()
    {
        return view('pages/reservations');
    }

    public function offers()
    {
        return view('pages/offers');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
