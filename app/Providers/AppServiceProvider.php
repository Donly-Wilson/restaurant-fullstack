<?php

namespace App\Providers;

use App\Models\Todo;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Use bootstrap style for pagination since tailwind is not being used
        Paginator::useBootstrap();


        view()->composer('includes.admin-page.quick-notes', function ($view) {
            $quicknoteTodo = Todo::all();
            $todoResults = json_decode($quicknoteTodo);

            //Pass $todoResults as 'todoResults' in view
            $view->with('todoResults', $todoResults);

            //Another way to write code above
            // $quicknoteTodo = DB::table('quicknotes_todo')->get();
            // View::share('results', $quicknoteTodo);
        });
    }
}
