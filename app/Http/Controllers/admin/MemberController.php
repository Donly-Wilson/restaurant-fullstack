<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Route for "All members" page
    public function index()
    {
        // return 10 member from Member table per page
        $members = Member::paginate(10);

        return view('admin/members/all', [
            'members' => $members //passed down this members variable to route
        ]);
    }

    public function delete($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('admin/members');
    }
}
