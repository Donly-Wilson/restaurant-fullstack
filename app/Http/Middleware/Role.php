<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role as RO;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user(); //check to see if user is logged in
        foreach ($roles as $role) {
            $ro = RO::where('title', $role)->first();

            if ($user->roles->contains($ro)) { //return 1(admin) or 2(employee) depending on roles
                return $next($request);
            } else {
                return redirect('/admin');
            }
        }
        dd($roles);
        if (!Auth::check()) {
            return redirect('/login');
        }
    }
}
