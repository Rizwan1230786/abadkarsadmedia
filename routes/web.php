<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\QouteControlles;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\admin\InqueryController;
use App\Http\Controllers\admin\OurblogController;
use App\Http\Controllers\admin\OurteamController;
use App\Http\Controllers\admin\UrlslugController;
use App\Http\Controllers\admin\WebpagesController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Front\FrontUserController;
use App\Http\Controllers\admin\OurclinetsController;
use App\Http\Controllers\Front\AddProprtyController;
use App\Http\Controllers\userside\ReportsController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\realestate\AreaController;
use App\Http\Controllers\admin\realestate\BlogController;
use App\Http\Controllers\admin\realestate\AgentController;
use App\Http\Controllers\admin\realestate\StateController;
use App\Http\Controllers\userside\UserDashboardController;
use App\Http\Controllers\admin\customer\CustomerController;
use App\Http\Controllers\admin\realestate\AgencyController;
use App\Http\Controllers\admin\realestate\CitiesController;
use App\Http\Controllers\admin\realestate\PropetyController;
use App\Http\Controllers\admin\realestate\CategoryController;
use App\Http\Controllers\admin\realestate\FeaturesController;
use App\Http\Controllers\admin\realestate\InvestorController;
use App\Http\Controllers\admin\realestate\ProjectsController;
use App\Http\Controllers\admin\realestate\FacilitiesController;
use App\Http\Controllers\userside\PropertyManagementController;
use App\Http\Controllers\userside\UserProfileController;

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
        /////customerusers//////////
        Route::get('/customerusers', [CustomerController::class, 'index'])->name('customerusers');
        Route::post('/update_status_customer', [CustomerController::class, 'update_status_customer'])->name('update_status_customer');
        Route::post('/delete_customeruser/{id}', [CustomerController::class, 'destroy'])->name('destroy');

        ////route of webpages///////
        Route::get('/webpages', [WebpagesController::class, 'index'])->name('webpages');
        Route::get('/webpages/create', [WebpagesController::class, 'create'])->name('webpages.form');
        Route::post('/webpages/submitForm', [WebpagesController::class, 'submitForm'])->name('webpages.submitForm');
        Route::post('/webpages/checkPageUrlSlug', [WebpagesController::class, 'checkPageUrlSlug'])->name('webpages.checkPageUrlSlug');
        Route::post('/update-status_webpages', [WebpagesController::class, 'update_webpage_status'])->name('status');
        Route::delete('/delete/{id}', [WebpagesController::class, 'destroy'])->name('destroy');
        ///////route of subpages///////
        Route::get('/subpageslisting', [WebpagesController::class, 'subpageslisting'])->name('subpageslisting');
        Route::get('/createsubpages', [WebpagesController::class, 'subpages_create'])->name('createsubpages.form');
        Route::post('/submitSubpages', [WebpagesController::class, 'submitSubpages'])->name('submitSubpages');
        Route::post('/update_status_subpages', [WebpagesController::class, 'update_status_subpages'])->name('update_status_subpages');
        Route::post('/delete_subcategories/{id}', [WebpagesController::class, 'subcategory_destroy'])->name('delete_subcategories');
        //////////edit proflie////////////
        Route::get('/create_user', [AuthController::class, 'create'])->name('create');
        Route::post('/signup_user', [AuthController::class, 'signup'])->name('signup');
        Route::get('/edit_profile/{id}', [AuthController::class, 'edit_proflie']);
        Route::post('/update_profile/{id}', [AuthController::class, 'update']);
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
        Route::post('/fetch-states', [ProjectsController::class, 'fetchState']);
        Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
        Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.form');
        Route::post('/projects/submit', [ProjectsController::class, 'submit'])->name('projects_submit');
        Route::post('/projects/update', [ProjectsController::class, 'update'])->name('projects_update');
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
        Route::get('/get_fecilites', [PropetyController::class, 'get_fecilites'])->name('get_fecilites');
        Route::get('/properties', [PropetyController::class, 'index'])->name('properties');
        Route::get('/properties/create', [PropetyController::class, 'create'])->name('properties.form');
        Route::post('/properties/submit', [PropetyController::class, 'submit'])->name('properties_submit');
        Route::post('/properties/update/', [PropetyController::class, 'update'])->name('properties_update');
        Route::post('/update_property_status', [PropetyController::class, 'update_property_status'])->name('update_property_status');
        Route::post('/delete_properties/{id}', [PropetyController::class, 'destroy'])->name('properties_features');
        Route::get('/checkslug', [PropetyController::class, 'checkslug'])->name('checkslug');

        ///////route of agents//////
        Route::get('/agent', [AgentController::class, 'index'])->name('agent');
        Route::get('/agent/create', [AgentController::class, 'create'])->name('agent.form');
        Route::post('/agent/submit', [AgentController::class, 'submit'])->name('agent_submit');
        Route::post('/update_status_agent', [AgentController::class, 'update_agent_status'])->name('update_status_facilities');
        Route::post('/delete_agent/{id}', [AgentController::class, 'destroy'])->name('delete_agent');

        ///////route of agencies//////
        Route::get('/agency', [AgencyController::class, 'index'])->name('agency');
        Route::get('/agency/create', [AgencyController::class, 'create'])->name('agency.form');
        Route::post('/agency/submit', [AgencyController::class, 'submit'])->name('agency_submit');
        Route::post('/agency/update/', [AgencyController::class, 'update'])->name('agency_update');
        Route::post('/update_status_agency', [AgencyController::class, 'update_agency_status'])->name('update_status_facilities');
        Route::post('/delete_agency/{id}', [AgencyController::class, 'destroy'])->name('delete_agency');

        ////Route of state////////
        Route::get('/states', [StateController::class, 'index'])->name('state');
        Route::get('/states/create', [StateController::class, 'create'])->name('state.form');
        Route::post('/states/submit', [StateController::class, 'submit'])->name('state_submit');
        Route::post('/update_status_states', [StateController::class, 'update_cities_status'])->name('update_status_state');
        Route::post('/delete_states/{id}', [StateController::class, 'destroy'])->name('delete_state');

        //////Route of  area////////
        Route::get('/area', [AreaController::class, 'index'])->name('area');
        Route::get('/area/create', [AreaController::class, 'create'])->name('area.form');
        Route::post('/area/submit', [AreaController::class, 'submit'])->name('area_submit');
        Route::post('/update_status_states', [AreaController::class, 'update_cities_status'])->name('update_status_state');
        Route::post('/delete_area/{id}', [AreaController::class, 'destroy'])->name('delete_area');
        // Route::resource('/blog',BlogController::class);
        Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::post('/delete_blog/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
        ////route of urlslug///////////
        Route::get('/slugs', [UrlslugController::class, 'index'])->name('slugs');
        Route::get('/slugs/create', [UrlslugController::class, 'create'])->name('slugs.form');
        Route::post('/slugs/submit', [UrlslugController::class, 'submit'])->name('slugs.submit');
        Route::post('/update_status_slugs', [UrlslugController::class, 'update_slugs_status'])->name('update_status_slugs');
        Route::post('/delete_slugs/{id}', [UrlslugController::class, 'destroy'])->name('delete_slug');
    });
    Route::post('/property/fetch-states', [PropetyController::class, 'fetchState']);
    Route::post('/property/fetch-subcat', [PropetyController::class, 'fetchsubcat']);
});
////tiny mce image uplod
Route::post('/upload', [BlogController::class, 'upload']);


///Front
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/project', [FrontController::class, 'project'])->name('front.project');
Route::get('/project/{provider}', [FrontController::class, 'project_detail'])->name('front.project_detail');
Route::get('/agents', [FrontController::class, 'agent'])->name('front.agent');
Route::get('/agents-view', [FrontController::class, 'agent'])->name('front.agent');
Route::get('/agent/detail/{id}', [FrontController::class, 'agent_detail'])->name('front.agent_detail');
Route::get('/agency-view', [FrontController::class, 'agency'])->name('front.agency');
Route::get('/agency/detail/{id}', [FrontController::class, 'agency_detail'])->name('front.agency_detail');

//////user add property//////
Route::prefix('add-property')->group(function () {
    Route::get('/', [AddProprtyController::class, 'add_property'])->name('front.add-property');
    Route::get('/myform/ajax/{id}', [AddProprtyController::class, 'myformAjax'])->name('myform.ajax');
    Route::post('/fetch-subtype', [AddProprtyController::class, 'fetch_subtype'])->name('front.fetch-subtype');
    Route::post('/submit', [AddProprtyController::class, 'submit'])->name('front.submit');
});
////// route of properties/////////
Route::prefix('property')->group(function () {
    Route::get('/', [FrontController::class, 'property'])->name('front.property');
    Route::get('/{provider}', [FrontController::class, 'single_property_detail'])->name('front.single_property_detail');
    // Route::get('/{provider}', [FrontController::class, 'search_property'])->name('front.search_property');
    Route::get('/{categoryName}/{slug}', [FrontController::class, 'show_city_area'])->name('front.show_city_area');
    Route::get('/{slug}/{slug1}/{slug2}', [FrontController::class, 'area_peroperty'])->name('front.area_peroperty');
    Route::get('/property/{slug1}/{slug2}', [FrontController::class, 'property_detail'])->name('front.property_detail');
});
Route::prefix('House_Property')->group(function () {
    Route::get('/{slug1}/{slug2}', [FrontController::class, 'search_city_area_base_property'])->name('search_city_area_base_property');
});
///////end properties///////
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/blog/{provider}', [FrontController::class, 'blog_detail'])->name('front.blog_detail');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/faq', [FrontController::class, 'faq'])->name('front.faq');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('front.pricing');
Route::get('/error', [FrontController::class, 'error'])->name('front.error');
Route::get('/soon', [FrontController::class, 'soon'])->name('front.soon');
Route::get('/all/{slug}', [FrontController::class, 'list'])->name('front.list');
Route::prefix('search_property')->group(function () {
    Route::post('/fetch-states', [FrontController::class, 'fetchState'])->name('fetch-states');
    Route::get('/', [FrontController::class, 'search_property'])->name('front.search_property');
    Route::get('/redirect', [FrontController::class, 'redirect_search_property'])->name('front.redirect_search_property');
});

Route::prefix('city')->group(function () {
    Route::get('/{cityslug}', [FrontController::class, 'show_city'])->name('show_city');
});

//////user login//////////
Route::prefix('user')->group(function () {
    Route::get('/signin', [FrontUserController::class, 'index'])->name('signin');
    Route::post('/submitlogin', [FrontUserController::class, 'submitLogin'])->name('submitLogin');
    Route::get('/signup', [FrontUserController::class, 'signup'])->name('signup');
    Route::post('/register', [FrontUserController::class, 'regester'])->name('register');
    Route::get('/auth/google', [FrontUserController::class, 'redirectToGoogle']);
    Route::get('/auth/google/callback', [FrontUserController::class, 'handleGoogleCallback']);

    Route::group(['middleware' => 'auth:customeruser'], function () {
        Route::get('/userpanel', [FrontUserController::class, 'userpanel'])->name('userpanel');
        Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

        ////route of edit profile////////////////
        Route::get('/profile', [FrontUserController::class, 'edit_profile'])->name('profile');
        Route::post('/update_user/{id}', [FrontUserController::class, 'update_user'])->name('update_user');
        ///////////end//////////
        Route::get('/logout', [FrontUserController::class, 'logout'])->name('logout');

        ////Property Management
        Route::get('/post-listing', [PropertyManagementController::class, 'post_listing'])->name('post-listing');
        Route::post('/submit_post_listing', [PropertyManagementController::class, 'submit_post_listing'])->name('post-listing');
        Route::get('/listing_policy', [PropertyManagementController::class, 'listing_policy'])->name('listing_policy');
        Route::get('/zone_detail', [PropertyManagementController::class, 'zone_detail'])->name('zone_detail');
        ///////inventory search////////
        Route::get('/inventory_search', [PropertyManagementController::class, 'inventory_search'])->name('inventory_search');
        Route::post('/fetch-states', [PropertyManagementController::class, 'fetchState']);
        Route::post('/fetch-city', [PropertyManagementController::class, 'fetchCity']);
        Route::post('/fetch-area', [PropertyManagementController::class, 'fetchArea']);
        Route::post('/fetch-data', [PropertyManagementController::class, 'fetchData']);
        /////Active-listing///////////
        Route::get('/all-listing', [PropertyManagementController::class, 'all_listing'])->name('all_listing');
        ////forsale listing + for rent///////
        Route::get('/for-sale', [PropertyManagementController::class, 'for_sale'])->name('for_sale');
        Route::get('/for-rent', [PropertyManagementController::class, 'for_rent'])->name('for_rent');
        Route::get('/edit-listing-for-sale/{id}', [PropertyManagementController::class, 'edit_for_sale'])->name('edit-listing-forsale');
        Route::post('/update-listing/{id}', [PropertyManagementController::class, 'update_post_listing'])->name('update-listing-forsale');
        Route::get('/edit-listing-for-rent/{id}', [PropertyManagementController::class, 'edit_for_rent'])->name('edit-listing-forrent');

        ///////Pending-listing///////
        Route::get('/pending-all-listing', [PropertyManagementController::class, 'pending_all_listing'])->name('pending-all-listing');
        Route::get('/pending-for-sale', [PropertyManagementController::class, 'pending_for_sale'])->name('pending-for-sale');
        Route::get('/pending-for-rent', [PropertyManagementController::class, 'pending_for_rent'])->name('pending-for-rent');
        ////////reports///////////
        Route::get('/all-reports', [ReportsController::class, 'all_reports'])->name('all-reports');
        /////userprofile routes//////////
        Route::get('/user-profile', [UserProfileController::class, 'user_profile'])->name('user-profile');
        Route::post('/update_user_profile/{id}', [UserProfileController::class, 'update_user_profile'])->name('update_user_profile');
        Route::get('/change-password', [UserProfileController::class, 'change_password'])->name('change-password');
        Route::post('/update-password', [UserProfileController::class, 'update_password'])->name('update-password');

    });
    Route::post('/contact_us', [FrontUserController::class, 'contact_us'])->name('contact_us');
});
/////end front

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    // Artisan::call('route:cache');
    // Artisan::call('view:clear');
    // Artisan::call('config:cache');
    dd("Cache Clear All");
});
Route::get('/routes', function () {
    // Artisan::call('cache:clear');
    Artisan::call('route:cache');
    // Artisan::call('view:clear');
    // Artisan::call('config:cache');
    dd("Cache Clear All");
});

Route::get('/link', function () {
    Artisan::call('storage:link');
    // Artisan::call('route:cache');
    // Artisan::call('view:clear');
    // Artisan::call('config:cache');
    dd("storage");
});
