<?php

namespace App\Http\Controllers\admin;

use App\Actions\Fortify\PasswordValidationRules;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use PasswordValidationRules;
class UsersController extends Controller
{
    //Any link using this controller will need to be logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Route for "All Users" page
    public function index()
    {
        // return 10 users from User table per page
        $users = User::paginate(10);

        //Return admin users
        $adminUsers = User::whereHas(
            'roles',
            function ($q) {
                $q->where('role_id', '1');
            }
        )->get();

        //Return employee users
        $employeeUsers = User::whereHas(
            'roles',
            function ($q) {
                $q->where('role_id', '2');
            }
        )->get();
        // return $users;
        return view('admin/users/all', [
            'users' => $users //passed down user variable to route
        ]);
    }

    public function create()
    {
        $roles = Role::all(); //Pull all data from roles table
        return view('admin/users/create', [
            'roles' => $roles
        ]);
    }

    public function store()
    {
        //Add validation for new user info being    inputed
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
        ]);

        // return request()->all();
        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->attach(request('role_id')); //this just reattach role_id to user


        return redirect('admin/users');
    }

    public function edit($id) // $id created in the route/web.php and pulled from browser's navlink
    {

        //Find user by id in user table and store it in "$user" variable
        $user = User::find($id);
        $roles = Role::all();
        return view('admin/users/edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function update($id) // $id created in the route/web.php and pulled from browser's navlink
    {
        //Add validation for new user info being inputed
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
        ]);

        //Select user by id and rename every value
        $user = User::find($id);
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->sync([request('role_id')]); //drop users role and add new one (syncWithoutDetaching will add on the roles)

        return redirect('admin/users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users');
    }
}
