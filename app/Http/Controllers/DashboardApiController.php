<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardApiController extends Controller
{
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDailyRevenueLast30()
    {
        /*
        1)convert "created_at" dates into Y-M-D format and name it "reserved_day"
        2)This calculates the sum of "guest_total" column form reservations table for each day in the last 30 days and multiply it by $27( 27 is random num for average meal price) store it in estimated_earnings
        3)calculate total reservation for each day
        4) Sums up the total "guest_total" for each day
        5)change "reserved_day" in descending order
        returns it in an array
        N.B(reserved_day==x,estimated_earnings == y) || "%Y-%M-%D" != "%Y-%m-%d"
        */

        // return $estimated_income_daily_data = DB::select(DB::raw('
        //     SELECT 
        //         DATE_FORMAT(created_at,"%Y-%M-%D") as reserved_day,
        //         (sum(guest_total)*27)as estimated_earnings,
        //         count(*) as total_reservations,
        //         sum(guest_total)
        //         FROM restaurant.reservations
        //         group by reserved_day desc;
        // '));

        //Returns date(x) and earings on date(y)
        // For local host "FROM restaurant.reservations" was use instead of "FROM reservations"
        return $estimated_income_daily_data = DB::select(DB::raw('
            SELECT 
                DATE_FORMAT(created_at,"%Y-%m-%d") as x,
                (sum(guest_total)*27)as y
                FROM restaurant.reservations
                group by x `desc`;
        '));
    }
}
