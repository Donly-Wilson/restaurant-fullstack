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

/*
Using "Route::resource" links are auto genarated like below:
QuickNote List API: http://127.0.0.1:8000/api/quicknotes_todo ( Method:- GET)
QuickNote Create API: http://127.0.0.1:8000/api/quicknotes_todo (Method:- POST)
QuickNote Fetch API: http://127.0.0.1:8000/api/quicknotes_todo /{id} (Method:- GET)
QuickNote Update API: http://127.0.0.1:8000/api/quicknotes_todo/{id} (Method:- PUT)
QuickNote Delete API: http://127.0.0.1:8000/api/quicknotes_todo/{id} (Method:- DELETE)
*/

//Api created for QuickNote Todo section
Route::delete('selected-quicknotes_todo', [QuicknoteTodoController::class, 'deleteCheckedTask'])->name("todo.deleteSelected");
Route::resource('quicknotes_todo', 'App\Http\Controllers\QuicknoteTodoController');
