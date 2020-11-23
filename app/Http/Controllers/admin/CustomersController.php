<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //Any link using this controller will need to be loged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allOffersMembers()
    {
        return view('admin/customers/all-offers-members');
    }

    public function allReservations()
    {
        return view('admin/customers/all-reservations');
    }
}
