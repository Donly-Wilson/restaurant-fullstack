<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //Any link using this controller will need to be loged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/users/all');
    }

    public function create()
    {
        return view('admin/users/create');
    }

    public function edit()
    {
        return view('admin/users/edit');
    }
}
