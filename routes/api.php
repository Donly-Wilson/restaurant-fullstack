<?php

use App\Http\Controllers\QuicknoteTodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Api created for QuickNote Todo section
Route::resource('quicknotes_todo', 'App\Http\Controllers\QuicknoteTodoController');
Route::middleware('auth:api')->group(function () {
    //Quicknote todo route
    // Route::resource('quicknotes_todo', [QuicknoteTodoController::class],   ['except' => [
    //     'create', 'store', 'update', 'destroy'
    // ]]);
});
