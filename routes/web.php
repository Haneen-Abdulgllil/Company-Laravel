<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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




Route::get('/',[IndexController::class,'show_index'])->name("index");
Route::get('/about',[IndexController::class,'show_about'])->name("about");
Route::get('/companies',[IndexController::class,'show_companies'])->name("companies");
Route::get('/Contact-us',[IndexController::class,'show_contact'])->name("contact");
Route::get('/Services',[IndexController::class,'show_services'])->name("Services");
Route::get('/Jobs',[IndexController::class,'show_jobs'])->name("Jobs");
Route::get('/login',[IndexController::class,'show_login'])->name("login");
Route::get('/signup',[IndexController::class,'show_signup'])->name("signup");
Route::get('/Jobs-details',[IndexController::class,'show_jobs_details'])->name("Jobs-details");
