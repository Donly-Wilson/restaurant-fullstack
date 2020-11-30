<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Route for "All Reservations" page
    public function index()
    {
        // return 10 reservation from Reservation table per page
        $reservations = Reservation::paginate(10);

        return view('admin/reservations/all', [
            'reservations' => $reservations //passed down reservations variable to route
        ]);
    }

    public function create()
    {
        return view('admin/reservations/create', []);
    }

    public function store()
    {
        //Add validation for new reservation info being inputed in table
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'digits:10'],
            'guest_total' => ['required', 'string'],
            'time' => ['required'],
        ]);

        // return request()->all();
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_total = request('guest_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('admin/reservations');
    }

    public function edit($id) // $id created in the route/web.php and pulled from browser's navlink
    {

        //Find reservation by id in reservations table and store it in "$reservation" variable
        $reservation = Reservation::find($id);
        return view('admin/reservations/edit', [
            'reservation' => $reservation,
        ]);
    }

    public function update($id) // $id created in the route/web.php and pulled from browser's navlink
    {
        //Add validation for new reservation info being inputed in table
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['required', 'digits:10'],
            'guest_total' => ['required', 'string'],
            'time' => ['required'],
        ]);

        //Select reservation by id and rename every value
        // return request()->all();
        $reservation = Reservation::find($id);
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_total = request('guest_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('admin/reservations');
    }

    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('admin/reservations');
    }
}
