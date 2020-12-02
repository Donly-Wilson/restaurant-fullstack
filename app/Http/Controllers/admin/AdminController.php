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
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        //This calculates the sum of "guest_total" column form reservations table for last 30 days and multiply it by $27(random num for average meal price) returns it in an array
        $estimated_income_last_30 = DB::select(DB::raw('
            SELECT
                (sum(guest_total)*27) as total
                FROM restaurant.reservations
                WHERE created_at BETWEEN CURDATE()-INTERVAL 30 DAY AND CURDATE()
        '));
        // return dd($estimated_income_last_30[0]->total);
        $estimated_income_last_30 = $estimated_income_last_30[0]->total;


        //This calculates the sum of "guest_total" column form reservations table last for 30 days and returns it in an array
        $total_customers_last_30 = DB::select(DB::raw('
        SELECT
            sum(guest_total) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE()-INTERVAL 30 DAY AND CURDATE()
        '));


        //This calculates a count of all rows in reservations table and returns it in an array
        $total_reservation_last_30 = DB::select(DB::raw('
            SELECT
                count(*) as total
                FROM restaurant.reservations
                WHERE created_at BETWEEN CURDATE()-INTERVAL 30 DAY AND CURDATE()
        '));


        //This calculates a count of all rows for users with 2(employee) as role_id and returns it in an array
        $total_employees = DB::select(DB::raw('
            select count(*) as total
            from restaurant.users
            inner join role_user on role_user.user_id=users.id
            inner join roles on roles.id=role_user.role_id	
            where role_id = 2
        '));

        //Selects all "guest_total" in reservation table more than 0, return a limit of 5 and place it newest to oldest(desc)
        $latestReservations = Reservation::where('guest_total', '>', 0)->limit(5)->orderBy('created_at', 'desc')->get();

        return view('admin/dashboard', [
            'estimated_income_last_30' => "$" . $estimated_income_last_30, //"[0]->total" already reAssign above
            'total_customers_last_30' => $total_customers_last_30[0]->total,
            'total_reservation_last_30' => $total_reservation_last_30[0]->total,
            'total_employees' => $total_employees[0]->total,
            'latestReservations' => $latestReservations //passed down latest reservations variable to route
        ]);
    }
}
