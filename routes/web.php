<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ExperienceController;
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



Route::get('/master', function () {
    return view('include.master');
});

Route::get('/master_dash', function () {
    return view('include.master_dashboard');
});



Route::get('/master_user', function () {
    return view('include.master-user');
});





Route::get('/',[IndexController::class,'show_index'])->name("index");
Route::get('/about',[IndexController::class,'show_about'])->name("about");
Route::get('/companies',[IndexController::class,'show_companies'])->name("companies");
Route::get('/Contact-us',[IndexController::class,'show_contact'])->name("contact");
Route::get('/Services',[IndexController::class,'show_services'])->name("Services");
Route::get('/Jobs',[IndexController::class,'show_jobs'])->name("Jobs");
Route::get('/login',[IndexController::class,'show_login'])->name("login");
Route::get('/signup',[IndexController::class,'show_signup'])->name("signup");
Route::get('/Jobs-details',[IndexController::class,'show_jobs_details'])->name("Jobs-details");



Route::get('/add_job',[JobController::class,'add_job'])->name("add_job");
Route::get('/jobs',[JobController::class,'show_job'])->name("show_job");


Route::get('/add_company',[CompanyController::class,'add_company'])->name("add_company");
Route::get('/companies',[CompanyController::class,'show_companies'])->name("show_companies");


Route::get('/add_experience',[CompanyController::class,'add_experience'])->name("add_experience");
Route::get('/companies',[CompanyController::class,'show_companies'])->name("show_companies");
