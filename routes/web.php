<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PartenerController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\User\CoursesController;
use App\Http\Controllers\User\EducationController;
use App\Http\Controllers\User\SkillsController;
use App\Http\Controllers\User\PersonalInfoController;
use App\Http\Controllers\User\ExperienceController;


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
Route::get('/parteners',[IndexController::class,'show_parteners'])->name("parteners");
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

Route::get('/add_ads',[AdsController::class,'add_ads'])->name("add_ads");
Route::get('/ads',[AdsController::class,'show_ads'])->name("show_ads");

Route::get('/add_contact',[ContactController::class,'add_contact'])->name("add_contact");
Route::get('/contact',[ContactController::class,'show_contact'])->name("show_contact");

Route::get('/add_partener',[PartenerController::class,'add_partener'])->name("add_partener");
Route::get('/partener',[PartenerController::class,'show_partener'])->name("show_partener");

Route::get('/add_services',[ServicesController::class,'add_services'])->name("add_services");
Route::get('/services',[ServicesController::class,'show_services'])->name("show_services");
Route::post('/save_serv',[ServicesController::class,'store_services'])->name("store_services");

//

Route::get('/add_courses',[CoursesController::class,'add_courses'])->name("add_courses");
Route::get('/courses',[CoursesController::class,'show_courses'])->name("show_courses");



Route::get('/add_education',[EducationController::class,'add_education'])->name("add_education");
Route::get('/education',[EducationController::class,'show_education'])->name("show_education");



Route::get('/add_skills',[SkillsController::class,'add_skills'])->name("add_skills");
Route::get('/skills',[SkillsController::class,'show_skills'])->name("show_skills");



Route::get('/add_personal_info',[PersonalInfoController::class,'add_personal_info'])->name("add_personal_info");
Route::get('/personal_info',[PersonalInfoController::class,'show_personal_info'])->name("show_personal_info");



Route::get('/add_experience',[ExperienceController::class,'add_experience'])->name("add_experience");
Route::get('/experience',[ExperienceController::class,'show_experience'])->name("show_experience");

