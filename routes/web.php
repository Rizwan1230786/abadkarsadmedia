<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\realestate\FacilitiesController;
use App\Http\Controllers\admin\realestate\FeaturesController;
use App\Http\Controllers\admin\realestate\CategoryController;
use App\Http\Controllers\admin\realestate\InvestorController;
use App\Http\Controllers\admin\realestate\CitiesController;
use App\Http\Controllers\admin\realestate\ProjectsController;
use App\Http\Controllers\admin\realestate\PropetyController;
use App\Http\Controllers\admin\InqueryController;
use App\Http\Controllers\admin\OurclinetsController;
use App\Http\Controllers\admin\OurteamController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\QouteControlles;
use App\Http\Controllers\admin\OurblogController;
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
//check routes


// end check
Route::group(['prefix' => 'admin', 'as' => 'admin:'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/submit-login', [AuthController::class, 'submitLogin'])->name('submitLogin');

    Route::group(['middleware' => 'auth:web'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.form');
          //////////edit proflie////////////
        Route::get('/create_user', [AuthController::class, 'create'])->name('create');
        Route::post('/signup_user', [AuthController::class, 'signup'])->name('signup');
        Route::get('/edit_profile/{id}', [AuthController::class, 'edit_proflie']);
        Route::post('/update_profile/{id}',[AuthController::class, 'update']);
        Route::post('/update_status_user', [AuthController::class, 'update_user_status'])->name('status');
        Route::post('/delete_user/{id}', [AuthController::class, 'destroy'])->name('destroy');
        /////////////////end route of users//////////////////////
        /////route of facileties//////////
        Route::get('/facilities', [FacilitiesController::class, 'index'])->name('facilities');
        Route::get('/facilities/create', [FacilitiesController::class, 'create'])->name('facilities.form');
        Route::post('/facilities/submit', [FacilitiesController::class, 'submit'])->name('facilites_submit');
        Route::post('/update_status_facilities', [FacilitiesController::class, 'update_facilities_status'])->name('update_status_facilities');
        Route::post('/delete_facilities/{id}', [FacilitiesController::class, 'destroy'])->name('delete_facilities');
        /////route of projects/////////
        Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
        Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.form');
        Route::post('/projects/submit', [ProjectsController::class, 'submit'])->name('projects_submit');
        Route::post('/delete_projects/{id}', [ProjectsController::class, 'destroy'])->name('delete_projects');
        //////route of categories/////////
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.form');
        Route::post('/categories/submit', [CategoryController::class, 'submit'])->name('categories_submit');
        Route::post('/update_status_category', [CategoryController::class, 'update_category_status'])->name('update_status_category');
        Route::post('/delete_categories/{id}', [CategoryController::class, 'destroy'])->name('delete_categories');
        //////subcategory routes///////
        Route::get('/subcategories', [CategoryController::class, 'subindex'])->name('subcategories');
        Route::get('/categories/subcategory_create', [CategoryController::class, 'subcategory_create'])->name('subcategories.form');
        Route::post('/categories/submit_subcategory', [CategoryController::class, 'submit_subcategory'])->name('submit_subcategory');
        Route::post('/update_status_subcategory', [CategoryController::class, 'update_subcategory_status'])->name('update_status_subcategory');
        Route::post('/delete_subcategories/{id}', [CategoryController::class, 'subcategory_destroy'])->name('delete_subcategories');
        ////route of investor////////////
        Route::get('/investor', [InvestorController::class, 'index'])->name('investor');
        Route::get('/investor/create', [InvestorController::class, 'create'])->name('investor.form');
        Route::post('/investor/submit', [InvestorController::class, 'submit'])->name('investor_submit');
        Route::post('/update_status_investor', [InvestorController::class, 'update_investor_status'])->name('update_status_facilities');
        Route::post('/delete_investor/{id}', [InvestorController::class, 'destroy'])->name('delete_investor');
        /////route of cities////////
        Route::get('/cities', [CitiesController::class, 'index'])->name('cities');
        Route::get('/cities/create', [CitiesController::class, 'create'])->name('cities.form');
        Route::post('/cities/submit', [CitiesController::class, 'submit'])->name('cities_submit');
        Route::post('/update_status_cities', [CitiesController::class, 'update_cities_status'])->name('update_status_cities');
        Route::post('/delete_cities/{id}', [CitiesController::class, 'destroy'])->name('delete_cities');

        ////route of features////////
        Route::get('/features', [FeaturesController::class, 'index'])->name('features');
        Route::get('/features/create', [FeaturesController::class, 'create'])->name('features.form');
        Route::post('/features/submit', [FeaturesController::class, 'submit'])->name('features_submit');
        Route::post('/delete_features/{id}', [FeaturesController::class, 'destroy'])->name('delete_features');


          ////route of properties////////
          Route::get('/properties', [PropetyController::class, 'index'])->name('properties');
          Route::get('/properties/create', [PropetyController::class, 'create'])->name('properties.form');
          Route::post('/properties/submit', [PropetyController::class, 'submit'])->name('properties_submit');
          Route::post('/delete_properties/{id}', [PropetyController::class, 'destroy'])->name('properties_features');

    });
});

///Front
Route::get('/',[FrontController::class,'view'])->name('front.index');
Route::get('/list',[FrontController::class,'list'])->name('front.list');
Route::get('/agent',[FrontController::class,'agent'])->name('front.agent');
Route::get('/agent/detail',[FrontController::class,'agent_detail'])->name('front.agent_detail');
Route::get('/agency',[FrontController::class,'agency'])->name('front.agency');
Route::get('/agency/detail',[FrontController::class,'agency_detail'])->name('front.agency_detail');
Route::get('/property',[FrontController::class,'property'])->name('front.property');
Route::get('/property/detail',[FrontController::class,'property_detail'])->name('front.property_detail');
Route::get('/blog',[FrontController::class,'blog'])->name('front.blog');
Route::get('/blog/detail',[FrontController::class,'blog_detail'])->name('front.blog_detail');
Route::get('/contact',[FrontController::class,'contact'])->name('front.contact');
Route::get('/about',[FrontController::class,'about'])->name('front.about');
Route::get('/faq',[FrontController::class,'faq'])->name('front.faq');
Route::get('/pricing',[FrontController::class,'pricing'])->name('front.pricing');
Route::get('/error',[FrontController::class,'error'])->name('front.error');
Route::get('/soon',[FrontController::class,'soon'])->name('front.soon');
/////end front

Route::get('/clear', function () {
  Artisan::call('cache:clear');
  // Artisan::call('route:cache');
  // Artisan::call('view:clear');
  // Artisan::call('config:cache');
  dd("Cache Clear All");
});
