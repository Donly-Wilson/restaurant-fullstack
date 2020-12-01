<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CustomersController;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\StaticPagesController;
use App\Models\GeneralSetting;
use App\Models\SeoSetting;
use App\Models\SocialSetting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
Route::get('/', [StaticPagesController::class, 'home']);

// ./Menu
Route::get('/menu', [StaticPagesController::class, 'menu']);
Route::get('/menu/{slug}', [StaticPagesController::class, 'singleMenu']);

// ./Pages
Route::get('/contact', [StaticPagesController::class, 'contact']);
Route::get('/about', [StaticPagesController::class, 'about']);
// ./Pages/RESERVATION
Route::get('/reservations', [StaticPagesController::class, 'reservations']);
Route::post('/reservations', [StaticPagesController::class, 'saveReservation']);
Route::get('/reservations/thank-you', [StaticPagesController::class, 'thankYou']);
// ./Pages/OFFERS
Route::get('/offers', [StaticPagesController::class, 'offers']);
Route::post('/offers', [StaticPagesController::class, 'registerMember']);
Route::get('/offers/thank-you', [StaticPagesController::class, 'thankYou']);

/* ADMIN - this is route for links on admin dashboard page */
Route::get('/admin', [AdminController::class, 'dashboard']);

// ADMIN/food-categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index']);
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create']);
Route::post('/admin/food-categories', [FoodCategoriesController::class, 'store']);
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit']);
Route::put('/admin/food-categories/{id}', [FoodCategoriesController::class, 'update']);
Route::delete('/admin/food-categories/{id}/delete', [FoodCategoriesController::class, 'delete']); //delete method to delete user (advised way, doesn't matter tho)

// ADMIN/food-items
Route::get('/admin/food-items', [FoodItemsController::class, 'index']);
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create']);
Route::post('/admin/food-items', [FoodItemsController::class, 'store']);
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit']);
Route::put('/admin/food-items/{id}', [FoodItemsController::class, 'update']);
Route::delete('/admin/food-items/{id}/delete', [FoodItemsController::class, 'delete']); //delete method to delete user (advised way, doesn't matter tho)

// ADMIN Customers
// ADMIN/Members
Route::get('/admin/members', [MemberController::class, 'index']);
Route::delete('/admin/members/{id}/delete', [MemberController::class, 'delete']); //delete method to delete user 
// ADMIN/Reservations
Route::get('/admin/reservations', [ReservationController::class, 'index']);
Route::get('/admin/reservations/create', [ReservationController::class, 'create']);
Route::post('/admin/reservations', [ReservationController::class, 'store']);
Route::get('/admin/reservations/{id}/edit', [ReservationController::class, 'edit']);
Route::put('/admin/reservations/{id}', [ReservationController::class, 'update']);
Route::delete('/admin/reservations/{id}/delete', [ReservationController::class, 'delete']); //delete method to delete user 

// ADMIN/users
Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/create', [UsersController::class, 'create']);
Route::post('/admin/users', [UsersController::class, 'store']);
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit']);
Route::put('/admin/users/{id}', [UsersController::class, 'update']);
// Route::get('/admin/users/{id}/delete', [UsersController::class, 'delete']); //get request to delete user
// Route::post('/admin/users/{id}/delete', [UsersController::class, 'delete']);  //post request to delete user
Route::delete('/admin/users/{id}/delete', [UsersController::class, 'delete']); //delete method to delete user (advised way, doesn't matter tho)

// ADMIN/settings
Route::get('/admin/settings/general', [SettingController::class, 'general']);
Route::put('/admin/settings/general', [SettingController::class, 'savegeneral']); //PUT methodfor update route
Route::get('/admin/settings/seo', [SettingController::class, 'seo']);
Route::put('/admin/settings/seo', [SettingController::class, 'saveseo']);
Route::get('/admin/settings/social', [SettingController::class, 'social']);
Route::put('/admin/settings/social', [SettingController::class, 'savesocial']);


/* ADMIN AUTHENTICATION - this is route for giving access to admin dashboard page*/
// Register
Route::get('/admin/register', function () {
    return view('admin/register');
});
// Login
Route::get('/admin/login', function () {
    return view('admin/login');
});

//like a Wild card - can pass any data to any choosen view(remove home and put "*" for every single view)
View::composer(['home', 'pages/about', 'pages/contact', 'pages/offers', 'pages/reservations', 'thank-you', 'menu/index', 'menu/single-menu'], function ($view) {
    $generalSettings = GeneralSetting::find(1); //Pass down info in general_settings table to home view 
    $seoSettings = seoSetting::find(1); //Pass down info in seo_settings table to home view 
    $socialSettings = SocialSetting::find(1); //Pass down info in social_settings table to home view 

    $view->with('settings', [
        "general" => $generalSettings, //Writting like this in view "{{$settings[general]->site_title}}"
        "social" => $socialSettings,
        "seo" => $seoSettings
    ]);
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');