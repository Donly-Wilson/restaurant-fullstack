<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

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

    //This stores the members that sign up through offers page
    public function registerMember()
    {
        //Add validation for new member info being inputed in table
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'digits:10'],
        ]);

        // return request()->all();
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/offers/thank-you');
    }

    //Returned page after the member that sign up is stored in database
    public function offersThankYou()
    {
        return view('pages/thank-you');
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
