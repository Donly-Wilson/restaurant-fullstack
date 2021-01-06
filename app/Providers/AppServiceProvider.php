<?php

namespace App\Providers;

use App\Models\Todo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
            $results = json_decode($quicknoteTodo);

            $view->with('results', $results);
        });
    }
}
