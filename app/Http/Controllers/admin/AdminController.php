<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Any link using this controller will need to be loged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        //This calculates the sum of guest_total column for last 30 days and returns it in an array
        $estimated_income_last_30 = DB::select(DB::raw('
            SELECT
                sum(guest_total) as total
                FROM restaurant.reservations
                WHERE created_at BETWEEN CURDATE()-INTERVAL 30 DAY AND CURDATE()
        '));
        // return dd($estimated_income_last_30[0]->total);

        $estimated_income_last_30 = $estimated_income_last_30[0]->total;

        return view('admin/dashboard', [
            'estimated_income_last_30' => "$" . $estimated_income_last_30
        ]);
    }
}
