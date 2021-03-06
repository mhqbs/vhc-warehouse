<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/addvehicle', function () {
    return view('addvehicle', [
        "title" => "Add New Vehicle"
    ]);
});


Route::get('/vehicles', [PostController::class, 'index']);
Route::get('/parts', [PostController::class, 'showParts']);
Route::get('/vin/{Vehicle:VehicleID}', [PostController::class, 'showVehicle']);
Route::get('/vehmain/{ID}', [PostController::class, 'vehmaintenance']);