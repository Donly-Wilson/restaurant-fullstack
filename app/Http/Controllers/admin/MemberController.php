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

    public function create()
    {
        return view('admin/members/create', []);
    }

    public function store()
    {
        //Add validation for new member info being inputed in table
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
        ]);

        // return request()->all();
        $member = new Member();
        $member->title = request('title');
        $member->description = request('description');
        $member->image_url = request('image_url');
        $member->save();

        return redirect('admin/members');
    }

    public function edit($id) // $id created in the route/web.php and pulled from browser's navlink
    {

        //Find a member by id in Members table and store it in "$member" variable
        $member = Member::find($id);
        return view('admin/members/edit', [
            'member' => $member,
        ]);
    }

    public function update($id) // $id created in the route/web.php and pulled from browser's navlink
    {
        //Add validation for new food member info being inputed in table
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
        ]);

        //Select a member by id and rename every value
        $member = Member::find($id);
        $member->title = request('title');
        $member->description = request('description');
        $member->image_url = request('image_url');
        $member->save();

        return redirect('admin/members');
    }

    public function delete($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('admin/members');
    }
}
