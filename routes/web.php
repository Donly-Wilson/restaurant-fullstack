<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CustomersController;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\StaticPagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* STATIC PAGES - this is route for links on landing page */
// Home
Route::get(
    '/',
    [StaticPagesController::class, 'home']
);

// ./Menu
Route::get(
    '/menu',
    [StaticPagesController::class, 'menu']
);

Route::get(
    '/menu/{slug}',
    [StaticPagesController::class, 'singleMenu']
);

// ./Pages
Route::get(
    '/reservations',
    [StaticPagesController::class, 'reservations']
);
Route::get(
    '/offers',
    [StaticPagesController::class, 'offers']
);
Route::get(
    '/contact',
    [StaticPagesController::class, 'contact']
);
Route::get(
    '/about',
    [StaticPagesController::class, 'about']
);


/* ADMIN - this is route for links on admin dashboard page */
Route::get(
    '/admin',
    [AdminController::class, 'dashboard']
);

// ADMIN/food-categories
Route::get(
    '/admin/food-categories',
    [FoodCategoriesController::class, 'index']
);

Route::get(
    '/admin/food-categories/create',
    [FoodCategoriesController::class, 'create']
);

Route::get(
    '/admin/food-categories/{id}/edit',
    [FoodCategoriesController::class, 'edit']
);

// ADMIN/food-items
Route::get(
    '/admin/food-items',
    [FoodItemsController::class, 'index']
);

Route::get(
    '/admin/food-items/create',
    [FoodItemsController::class, 'create']
);

Route::get(
    '/admin/food-items/{id}/edit',
    [FoodItemsController::class, 'edit']
);

// ADMIN/customers
Route::get(
    '/admin/offers-members',
    [CustomersController::class, 'allOffersMembers']
);

Route::get(
    '/admin/reservations',
    [CustomersController::class, 'allReservations']
);

Route::get(
    '/admin/offers-members/{id}/edit',
    [CustomersController::class, 'edit']
);

// ADMIN/users
Route::get(
    '/admin/users',
    [UsersController::class, 'index']
);

Route::get(
    '/admin/users/create',
    [UsersController::class, 'create']
);

Route::get(
    '/admin/users/{id}/edit',
    [UsersController::class, 'edit']
);

/* ADMIN AUTHENTICATION */
// Register
Route::get('/admin/register', function () {
    return view('admin/register');
});
// Login
Route::get('/admin/login', function () {
    return view('admin/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
