<?php

use App\Http\Controllers\boxController;
use App\Http\Controllers\formController;
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
    return view('welcome');
});
Route::get("/percobaan", [boxController::class, 'coba']);
Route::get("/box", [boxController::class, 'index']);

Route::get("/form",[formController::class,'index']);
Route::post("/form",[formController::class,'action'])->name('form.action');

