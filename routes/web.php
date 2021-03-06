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
use App\Http\Controllers\agency\AgentsController;
use App\Http\Controllers\Front\pdf\PdfController;
use App\Http\Controllers\admin\WebpagesController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Front\FrontUserController;
use App\Http\Controllers\admin\OurclinetsController;
use App\Http\Controllers\Front\AddProprtyController;
use App\Http\Controllers\userside\ReportsController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\tools\ToolsController;
use App\Http\Controllers\userside\UserRolesController;
use App\Http\Controllers\userside\roles\RoleController;
use App\Http\Controllers\agency\AgentPropertyController;
use App\Http\Controllers\userside\UserProfileController;
use App\Http\Controllers\admin\developer\DeveloperPatner;
use App\Http\Controllers\admin\realestate\AreaController;
use App\Http\Controllers\admin\realestate\BlogController;
use App\Http\Controllers\agency\AgencyPropertyController;
use App\Http\Controllers\admin\realestate\AgentController;
use App\Http\Controllers\admin\realestate\StateController;
use App\Http\Controllers\agency\AgencyDashboardController;
use App\Http\Controllers\userside\UserDashboardController;
use App\Http\Controllers\admin\addtocart\ProductController;
use App\Http\Controllers\admin\customer\CustomerController;
use App\Http\Controllers\admin\our_pakges\PakgesController;
use App\Http\Controllers\admin\partners\PartnersController;
use App\Http\Controllers\admin\realestate\AgencyController;
use App\Http\Controllers\admin\realestate\CitiesController;
use App\Http\Controllers\admin\blogstags\BlogtagsController;
use App\Http\Controllers\admin\realestate\PropetyController;
use App\Http\Controllers\admin\realestate\CategoryController;
use App\Http\Controllers\admin\realestate\FeaturesController;
use App\Http\Controllers\admin\realestate\InvestorController;
use App\Http\Controllers\admin\realestate\ProjectsController;
use App\Http\Controllers\admin\customerorders\OrderController;
use App\Http\Controllers\admin\realestate\FacilitiesController;
use App\Http\Controllers\Front\subscriber\SubscriberController;
use App\Http\Controllers\userside\PropertyManagementController;
use App\Http\Controllers\userside\advertise\AdvertiseController;
use App\Http\Controllers\Front\advertise\FrontAdvertiseController;
use App\Http\Controllers\admin\testimonials\TestimonialsController;
use App\Http\Controllers\userside\agencystaff\AgencyStaffController;
use App\Http\Controllers\agency\AgencyUserController;
use App\Http\Controllers\admin\our_pakges\BannerAdvertisementController;
use App\Http\Controllers\agency\forgetpassword\ForgotPasswordController;
use App\Http\Controllers\admin\tools\ToolsController as ToolsToolsController;

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
        /////////Subscribers route////////////////////////
        Route::get('/subscribe', [SubscriberController::class, 'index'])->name('subribe');
        /////////////Userroute//////////////////////
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
        // /////////////////Approval
        Route::get('/aproval', [PropetyController::class, 'approval'])->name('aproval');
        Route::get('/update/property/{id}', [PropetyController::class, 'update_property'])->name('update_property');

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
        //////recent email bye agency /////////////////
        Route::get('/agency/resend', [AgencyController::class, 'resend_email_agency'])->name('agency.resend');
        ///////////////   View Listing
        Route::get('/view/listing/{id}', [AgencyController::class, 'detail_agent'])->name('detail_agent');
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
        ///////route of partners///////
        Route::get('/partners', [PartnersController::class, 'index'])->name('partners');
        Route::get('/create_partners', [PartnersController::class, 'create'])->name('create_partners');
        Route::post('/partners_submit', [PartnersController::class, 'submit'])->name('partners_submit');
        Route::post('/delete_partners/{id}', [PartnersController::class, 'destroy'])->name('delete_partners');
        ////////route of testimonials/////////
        Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
        Route::get('/create_testimonial', [TestimonialsController::class, 'create'])->name('create_testimonial');
        Route::post('/testimonial_submit', [TestimonialsController::class, 'submit'])->name('testimonial_submit');
        Route::post('/delete_testinomial/{id}', [TestimonialsController::class, 'destroy'])->name('delete_testinomial');
        ////route of urlslug///////////
        Route::get('/slugs', [UrlslugController::class, 'index'])->name('slugs');
        Route::get('/slugs/create', [UrlslugController::class, 'create'])->name('slugs.form');
        Route::post('/slugs/submit', [UrlslugController::class, 'submit'])->name('slugs.submit');
        Route::post('/update_status_slugs', [UrlslugController::class, 'update_slugs_status'])->name('update_status_slugs');
        Route::post('/delete_slugs/{id}', [UrlslugController::class, 'destroy'])->name('delete_slug');
        ////route of orders////////
        Route::get('/orders', [OrderController::class, 'index'])->name('orders');
        /////route of add to cart product/////////////
        Route::get('/product', [ProductController::class, 'index'])->name('product');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.form');
        Route::post('/product/submit', [ProductController::class, 'submit'])->name('product_submit');
        Route::post('/update_status_product', [ProductController::class, 'update_product_status'])->name('update_status_product');
        Route::post('/delete_product/{id}', [ProductController::class, 'destroy'])->name('delete_product');
        ////////route off aour pakges//////////
        Route::get('/pakges', [PakgesController::class, 'index'])->name('pakges');
        Route::get('/pakges/create', [PakgesController::class, 'create'])->name('pakges.form');
        Route::post('/pakges/submit', [PakgesController::class, 'submit'])->name('pakges_submit');
        Route::post('/update_status_pakges', [PakgesController::class, 'update_pakges_status'])->name('update_status_pakges');
        Route::post('/delete_pakges/{id}', [PakgesController::class, 'destroy'])->name('delete_pakges');
        ///////route of sub pakges//////////
        Route::get('/subpakges', [PakgesController::class, 'subpakgeslisting'])->name('subpakges');
        Route::get('/createsubpakges', [PakgesController::class, 'subpakges_create'])->name('createsubpakges.form');
        Route::post('/submitsubpakges', [PakgesController::class, 'submit_subpakges'])->name('submitsubpakges');
        Route::post('/update_status_subpakges', [PakgesController::class, 'update_status_subpakges'])->name('update_status_subpakges');
        Route::post('/delete_subpakges/{id}', [PakgesController::class, 'subpakges_destroy'])->name('delete_subpakges');
        /////route of banner advertisement controler//////
        Route::get('/banners', [BannerAdvertisementController::class, 'index'])->name('banners');
        Route::get('/banners/create', [BannerAdvertisementController::class, 'create'])->name('banners.form');
        Route::post('/banners/submit', [BannerAdvertisementController::class, 'submit'])->name('banners_submit');
        Route::post('/update_status_banners', [BannerAdvertisementController::class, 'update_banners_status'])->name('update_status_banners');
        Route::post('/delete_banners/{id}', [BannerAdvertisementController::class, 'destroy'])->name('delete_banners');
        ////////////routs of tools//////////
        Route::get('/tools', [ToolsController::class, 'index'])->name('tools');
        Route::get('/tools/create', [ToolsController::class, 'create'])->name('tools.form');
        Route::post('/tools/submit', [ToolsController::class, 'submit'])->name('tools_submit');
        Route::post('/update_status_tools', [ToolsController::class, 'update_tools_status'])->name('update_status_tools');
        Route::post('/delete_tools/{id}', [ToolsController::class, 'destroy'])->name('delete_tools');

        ////////////// // developer///////////////////////
        Route::get('/create/form/developer', [DeveloperPatner::class, 'show_create'])->name('developer.submit');
        Route::get('/index/developer', [DeveloperPatner::class, 'developer_index'])->name('developer.index');
        Route::post('/create/developer', [DeveloperPatner::class, 'create'])->name('create_developer');
        Route::get('/update/form/developer/{id}', [DeveloperPatner::class, 'developer_update'])->name('developer.update');
        Route::post('/update/developer', [DeveloperPatner::class, 'update'])->name('developer.update.form');
        Route::get('/delete/developer/{id}', [DeveloperPatner::class, 'delete'])->name('developer.delete');
        //////////  add Tags
        Route::get('/tags', [BlogtagsController::class, 'index'])->name('tags');
        Route::get('/tags/create', [BlogtagsController::class, 'create'])->name('tags.form');
        Route::post('/tags/submit', [BlogtagsController::class, 'submit'])->name('tags_submit');
        Route::post('/delete_tags/{id}', [BlogtagsController::class, 'destroy'])->name('delete_tags');
    });
    Route::post('/property/fetch-states', [PropetyController::class, 'fetchState']);
    Route::post('/property/fetch-subcat', [PropetyController::class, 'fetchsubcat']);
});
////tiny mce image uplod
Route::post('/upload', [BlogController::class, 'upload']);


///Front
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/project', [FrontController::class, 'project'])->name('front.project');
Route::get('/new-projects', [FrontController::class, 'new_projects'])->name('front.new-projects');
Route::get('/project/{provider}', [FrontController::class, 'project_detail'])->name('front.project_detail');
Route::get('/agents', [FrontController::class, 'agent'])->name('front.agent');
Route::get('/agents-view', [FrontController::class, 'agent'])->name('front.agent');
Route::prefix('agent')->group(function () {
    Route::get('/agent_detail/{id}', [FrontController::class, 'agent_detail'])->name('front.agent_detail');
});
Route::get('/agency-view', [FrontController::class, 'agency'])->name('front.agency');
Route::get('/agency/detail/{slug}', [FrontController::class, 'agency_detail'])->name('front.agency_detail');
Route::post('/subscribe', [SubscriberController::class, 'subscriber_mail'])->name('front.subscribe');

///////genrate pdf///////
Route::prefix('pdf')->group(function () {
    Route::get('/create-pdf-file/{slug}', [PdfController::class, 'index'])->name('create-pdf-file');
});
/////////advertisement routes////////
Route::prefix('advertise')->group(function () {
    Route::get('/', [FrontAdvertiseController::class, 'advertise'])->name('front.advertise');
    Route::get('/{id}', [FrontAdvertiseController::class, 'pakges_detail'])->name('front.pakges_detail');
    /////send mail////////
    Route::post('/mail-send', [FrontAdvertiseController::class, 'send_mail'])->name('front.mail-send');
});
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
    // Route::get('/property/{slug1}/{slug2}', [FrontController::class, 'property_detail'])->name('front.property_detail');
    // Route::get('/property/{slug1}', [FrontController::class, 'property_detail'])->name('front.property_detail');
});
Route::prefix('tags-property')->group(function () {
    Route::get('/{slug}_base_property', [FrontController::class, 'tag_base_property'])->name('front.tag_base_property');
});
Route::prefix('House_Property')->group(function () {
    Route::get('/{slug1}/{slug2}', [FrontController::class, 'search_city_area_base_property'])->name('search_city_area_base_property');
});
///////end properties///////
Route::prefix('blog')->group(function () {
    Route::get('/', [FrontController::class, 'blog'])->name('front.blog');
    Route::get('/{slug}-base-blogs', [FrontController::class, 'blogs_tags'])->name('front.blog_tags');
    Route::get('/{provider}', [FrontController::class, 'blog_detail'])->name('front.blog_detail');
});


Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/faq', [FrontController::class, 'faq'])->name('front.faq');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('front.pricing');
Route::get('/error', [FrontController::class, 'error'])->name('front.error');
Route::get('/soon', [FrontController::class, 'soon'])->name('front.soon');
Route::prefix('search_property')->group(function () {
    Route::post('/fetch-states', [FrontController::class, 'fetchState'])->name('fetch-states');
    Route::get('/', [FrontController::class, 'search_property'])->name('front.search_property');
    Route::get('/redirect', [FrontController::class, 'redirect_search_property'])->name('front.redirect_search_property');
});
/// Forum
Route::get('/forum', [FrontController::class, 'forum'])->name('front.forum');
/// Forum-detail
Route::get('/forum-detail', [FrontController::class, 'detail'])->name('front.detail');
///index
Route::get('/index-page1', [FrontController::class, 'page1'])->name('front.page1');







Route::prefix('city')->group(function () {
    Route::get('/{cityslug}', [FrontController::class, 'show_city'])->name('show_city');
});
Route::prefix('all-city')->group(function () {
    Route::get('/', [FrontController::class, 'all_city'])->name('front.all-city');
    Route::get('/{slug}-all-property', [FrontController::class, 'list'])->name('front.list');
});
Route::prefix('agency-property')->group(function () {
    Route::get('/{slug}', [FrontController::class, 'agency_base_property'])->name('agency_base_property');
});
Route::prefix('agent-property')->group(function () {
    Route::get('/{slug}', [FrontController::class, 'agent_base_property'])->name('agent_base_property');
});
//////user login//////////
Route::prefix('user')->group(function () {
    Route::get('/signin', [FrontUserController::class, 'index'])->name('signin');
    Route::POST('/submitlogin', [FrontUserController::class, 'submitLogin'])->name('submitLogin');
    Route::get('/signup', [FrontUserController::class, 'signup'])->name('signup');
    Route::post('/register', [FrontUserController::class, 'regester'])->name('register');
    Route::get('/auth/google', [FrontUserController::class, 'redirectToGoogle']);
    Route::get('/auth/google/callback', [FrontUserController::class, 'handleGoogleCallback']);
    Route::get('/our/partner', [FrontUserController::class, 'user_partner']);
    //////////////Plot Finder//////////////
    Route::get('/plot_finder', [FrontUserController::class, 'map'])->name('plot_finder');


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
        /////zone area filter
        Route::post('/fetch-zone-area', [PropertyManagementController::class, 'fetch_zone_area']);
        Route::post('/fetch-data', [PropertyManagementController::class, 'fetchData']);
        /////Active-listing///////////
        Route::get('/all-listing', [PropertyManagementController::class, 'all_listing'])->name('all_listing');
        ////forsale listing + for rent///////
        Route::get('/for-sale', [PropertyManagementController::class, 'for_sale'])->name('for_sale');
        Route::get('/for-rent', [PropertyManagementController::class, 'for_rent'])->name('for_rent');
        Route::get('/edit-listing-for-sale/{id}', [PropertyManagementController::class, 'edit_for_sale'])->name('edit-listing-forsale');
        Route::post('/update-listing/{id}', [PropertyManagementController::class, 'update_post_listing'])->name('update-listing-forsale');
        Route::get('/edit-listing-for-rent/{id}', [PropertyManagementController::class, 'edit_for_rent'])->name('edit-listing-forrent');
        ///////////////   client&leads/////////////
        Route::get('/client&lead', [PropertyManagementController::class, 'client_main'])->name('client_main');
        // //////////  Management/////
        Route::get('/manage/all', [PropertyManagementController::class, 'all'])->name('manage_all');
        Route::get('/manage/very_hot', [PropertyManagementController::class, 'very_hot'])->name('manage.ver_hot');
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
        Route::get('/agency-profile', [UserProfileController::class, 'agency_profile'])->name('agency-profile');
        Route::post('/submit_agency_profile', [UserProfileController::class, 'submit_agency_profile'])->name('submit_agency_profile');


        ////userroles/////////
        Route::get('/user-roles', [UserRolesController::class, 'index'])->name('user-roles');

        //////////ad advertise controller////////////
        Route::get('/advertise', [AdvertiseController::class, 'index'])->name('advertise');
        Route::get('/refresh-advertise', [AdvertiseController::class, 'refresh'])->name('refresh-advertise');
        Route::get('/premium-advertise', [AdvertiseController::class, 'premium'])->name('premium-advertise');
        Route::get('/hot-advertise', [AdvertiseController::class, 'hot'])->name('hot-advertise');
        Route::get('/superhot-advertise', [AdvertiseController::class, 'superhot'])->name('superhot-advertise');
        ////add to cartroute///////
        Route::get('cart', [AdvertiseController::class, 'cart'])->name('cart');
        Route::get('add-to-cart/{id}', [AdvertiseController::class, 'addToCart'])->name('add.to.cart');
        Route::post('update-cart', [AdvertiseController::class, 'update'])->name('update.cart');
        Route::post('remove-from-cart', [AdvertiseController::class, 'remove'])->name('remove.from.cart');
        Route::get('checkout', [AdvertiseController::class, 'checkout'])->name('checkout');
        Route::post('place-order', [AdvertiseController::class, 'place_order'])->name('place-order');


        //////tools route/////////////////
        Route::get('/favourite-listing', [ToolsController::class, 'index'])->name('favourite-listing');
        Route::get('/email-alert', [ToolsController::class, 'email_alert'])->name('email-alert');
        Route::get('/mange-email-alert', [ToolsController::class, 'mange_email_alert'])->name('mange-email-alert');
        /////route of agency staf//////
        Route::get('/mange-user', [AgencyStaffController::class, 'index'])->name('mange-user');
        Route::get('/add-new-user', [AgencyStaffController::class, 'new_user'])->name('add-new-user');
        Route::get('/invite-user', [AgencyStaffController::class, 'invite_user'])->name('invite-user');
        Route::get('/mange-team', [AgencyStaffController::class, 'mange_team'])->name('mange-team');
        ////appointment with user
        ////route of user roles and permissions////////
        Route::post('/create_roles', [RoleController::class, 'store'])->name('create_roles');
    });
    Route::post('/contact_us', [FrontUserController::class, 'contact_us'])->name('contact_us');
    Route::post('/appointment', [FrontUserController::class, 'appointment'])->name('appointment');
    Route::post('/agent_inquiry', [FrontUserController::class, 'agent_inquiry'])->name('inquiry ');
    Route::post('/agency_inquiry', [FrontUserController::class, 'agency_inquiry'])->name('/agency');
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

Route::group(['prefix' => 'agency', 'as' => 'agency:'], function () {
    //////Agency//////////
    Route::get('/agencypanel', [AgencyUserController::class, 'agencypanel'])->name('agencypanel');
    Route::post('/submit-login', [AgencyUserController::class, 'submitLogin'])->name('submitLogin');
    Route::get('/showForgetPasswordForm', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('/forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::post('/reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

    Route::group(['middleware' => 'auth:agency'], function () {

        Route::get('/logout', [AgencyUserController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AgencyDashboardController::class, 'agencydashboard'])->name('dashboard');

        ///////route of agents//////
        Route::get('/agent', [AgentsController::class, 'index'])->name('agent');
        Route::get('/agent/create', [AgentsController::class, 'create'])->name('agent.form');
        Route::post('/agent/submit', [AgentsController::class, 'submit'])->name('agent_submit');
        Route::post('/update_status_agent', [AgentsController::class, 'update_agent_status'])->name('update_status_facilities');
        Route::post('/delete_agent/{id}', [AgentsController::class, 'destroy'])->name('delete_agent');

        ////route of agency properties////////
        Route::get('/properties', [AgencyPropertyController::class, 'index'])->name('properties');
        Route::get('/properties/create', [AgencyPropertyController::class, 'create'])->name('properties.form');
        Route::post('/properties/submit', [AgencyPropertyController::class, 'submit'])->name('properties_submit');
        Route::post('/properties/update/', [AgencyPropertyController::class, 'update'])->name('properties_update');
        Route::post('/update_property_status', [AgencyPropertyController::class, 'update_property_status'])->name('update_property_status');
        Route::post('/delete_properties/{id}', [AgencyPropertyController::class, 'destroy'])->name('properties_destroy');
        Route::get('/checkslug', [AgencyPropertyController::class, 'checkslug'])->name('checkslug');
        Route::get('/get_fecilites', [AgencyPropertyController::class, 'get_fecilites'])->name('get_fecilites');
        ////////rout of agent propertes/////
        Route::get('/agent-properties', [AgentPropertyController::class, 'index'])->name('agentproperties');
        Route::get('/agent-properties/create', [AgentPropertyController::class, 'create'])->name('agentproperties.form');
        Route::post('/agent-properties/submit', [AgentPropertyController::class, 'submit'])->name('agentproperties_submit');
        Route::post('/agent-properties/update/', [AgentPropertyController::class, 'update'])->name('agentproperties_update');
        Route::post('/update_agent_property_status', [AgentPropertyController::class, 'update_property_status'])->name('update_agentproperty_status');
        Route::post('/delete_agent_properties/{id}', [AgentPropertyController::class, 'destroy'])->name('agentproperties_destroy');
        Route::get('/checkslug', [AgentPropertyController::class, 'checkslug'])->name('checkslug');
        Route::get('/get_fecilites', [AgentPropertyController::class, 'get_fecilites'])->name('get_fecilites');
        /////route of changepassword agency///////////////////////
        Route::get('/change-password', [AgencyUserController::class, 'change_password'])->name('changepassword');
        Route::post('/update-password', [AgencyUserController::class, 'update_password'])->name('update-password');
        /////route of profile ///////////
        Route::get('/change-profile/{id}', [AgencyUserController::class, 'change_profile'])->name('profile');
        Route::post('/update_user_profile', [AgencyUserController::class, 'update_user_profile'])->name('update_user_profile');
        /////// route of changepassword agent///////////
        Route::get('/change-password-agent', [AgencyUserController::class, 'change_password_agent'])->name('changepasswordagent');
        Route::post('/update-password-agent', [AgencyUserController::class, 'update_password_agent'])->name('update-password');
        ///// route of agent profile ////////
        Route::get('/change-profile-agent/{id}', [AgencyUserController::class, 'change_profile_agent'])->name('agentprofile');
        Route::post('/update_agent_user_profile', [AgencyUserController::class, 'update_agent_user_profile'])->name('update_agentuser_profile');
    });
});
//////End Agency
