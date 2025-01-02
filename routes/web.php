<?php

use App\Http\Controllers\Admin\AxiosCallController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NewsPageController;
use App\Http\Controllers\Admin\NewsSeriesController;
use App\Http\Controllers\Admin\NewsStatusController;
use App\Http\Controllers\Admin\NewsTypeController;
use App\Http\Controllers\Admin\SiteCommonController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SubSubCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Site\DetailsController;
use App\Http\Controllers\Site\SiteCategoryController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('alreadyLoggedIn')->group(function (){
    Route::get('admin/login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('validate_login', [CustomAuthController::class, 'validate_login'])->name('sample.validate_login');
});
Route::get('registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::post('validate_registration', [CustomAuthController::class, 'validate_registration'])->name('sample.validate_registration');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::middleware('isLoggedIn')->group(function (){

    Route::get('admin/logout', [CustomAuthController::class, 'logout'])->name('logout');
    Route::get('admin/dashboard', [DashboardController::class, 'DashboardIndex']);


    Route::get('admin/user-list', [UserController::class, 'UserIndex']);
    Route::get('admin/user-create', [UserController::class,'UserCreate']);
    Route::post('admin/user-entry', [UserController::class, 'UserEntry']);
    Route::get('admin/user-edit/{id}', [UserController::class, 'UserEdit']);
    Route::post('admin/user-update/{id}', [UserController::class, 'UserUpdate']);


    Route::get('admin/category-list', [CategoryController::class, 'CategoryIndex']);
    Route::get('admin/category-create', [CategoryController::class, 'CategoryCreate']);
    Route::post('admin/category-entry', [CategoryController::class, 'CategoryEntry']);
    Route::get('admin/category-edit/{id}', [CategoryController::class, 'CategoryEdit']);
    Route::post('admin/category-update/{id}', [CategoryController::class, 'CategoryUpdate']);


    Route::get('admin/sub-category-list', [SubCategoryController::class, 'SubCategoryIndex']);
    Route::get('admin/sub-category-create', [SubCategoryController::class, 'SubCategoryCreate']);
    Route::post('admin/sub-category-entry', [SubCategoryController::class, 'SubCategoryEntry']);
    Route::get('admin/sub-category-edit/{id}', [SubCategoryController::class, 'SubCategoryEdit']);
    Route::post('admin/sub-category-update/{id}', [SubCategoryController::class, 'SubCategoryUpdate']);


    Route::get('admin/sub-sub-category-list', [SubSubCategoryController::class, 'SubSubCategoryIndex']);
    Route::get('admin/sub-sub-category-create', [SubSubCategoryController::class, 'SubSubCategoryCreate']);
    Route::post('admin/sub-sub-category-entry', [SubSubCategoryController::class, 'SubSubCategoryEntry']);
    Route::get('admin/sub-sub-category-edit/{id}', [SubSubCategoryController::class, 'SubSubCategoryEdit']);
    Route::post('admin/sub-sub-category-update/{id}', [SubSubCategoryController::class, 'SubSubCategoryUpdate']);


    Route::get('admin/about-edit', [SiteCommonController::class, 'AboutEdit']);
    Route::post('admin/about-update', [SiteCommonController::class, 'AboutUpdate']);
    Route::get('admin/communication-edit', [SiteCommonController::class, 'CommunicationEdit']);
    Route::post('admin/communication-update', [SiteCommonController::class, 'CommunicationUpdate']);
    Route::get('admin/policy-edit', [SiteCommonController::class, 'PolicyEdit']);
    Route::post('admin/policy-update', [SiteCommonController::class, 'PolicyUpdate']);
    Route::get('admin/terms-edit', [SiteCommonController::class, 'TermsEdit']);
    Route::post('admin/terms-update', [SiteCommonController::class, 'TermsUpdate']);
    Route::get('admin/info-edit', [SiteCommonController::class, 'InfoEdit']);
    Route::post('admin/info-update', [SiteCommonController::class, 'InfoUpdate']);


    Route::get('admin/menu-list', [MenuController::class, 'MenuIndex']);
    Route::get('admin/menu-create', [MenuController::class, 'MenuCreate']);
    Route::post('admin/menu-entry', [MenuController::class, 'MenuEntry']);
    Route::get('admin/menu-edit/{id}', [MenuController::class, 'MenuEdit']);
    Route::post('admin/menu-update/{id}', [MenuController::class, 'MenuUpdate']);


    Route::get('admin/menu-item-list', [MenuController::class, 'MenuItemIndex']);
    Route::get('admin/menu-item-create', [MenuController::class, 'MenuItemCreate']);
    Route::post('admin/menu-item-entry', [MenuController::class, 'MenuItemEntry']);
    Route::get('admin/menu-item-edit/{id}', [MenuController::class, 'MenuItemEdit']);
    Route::post('admin/menu-item-update/{id}', [MenuController::class, 'MenuItemUpdate']);


    Route::get('admin/menu-sub-item-list', [MenuController::class, 'MenuSubItemIndex']);
    Route::get('admin/menu-sub-item-create', [MenuController::class, 'MenuSubItemCreate']);
    Route::post('admin/menu-sub-item-entry', [MenuController::class, 'MenuSubItemEntry']);
    Route::get('admin/menu-sub-item-edit/{id}', [MenuController::class, 'MenuSubItemEdit']);
    Route::post('admin/menu-sub-item-update/{id}', [MenuController::class, 'MenuSubItemUpdate']);


    Route::get('admin/menu-sub-sub-item-list', [MenuController::class, 'MenuSubSubItemIndex']);
    Route::get('admin/menu-sub-sub-item-create', [MenuController::class, 'MenuSubSubItemCreate']);
    Route::post('admin/menu-sub-sub-item-entry', [MenuController::class, 'MenuSubSubItemEntry']);
    Route::get('admin/menu-sub-sub-item-edit/{id}', [MenuController::class, 'MenuSubSubItemEdit']);
    Route::post('admin/menu-sub-sub-item-update/{id}', [MenuController::class, 'MenuSubSubItemUpdate']);


    Route::get('admin/news-page-list', [NewsPageController::class, 'NewsPageIndex']);
    Route::get('admin/news-page-create', [NewsPageController::class, 'NewsPageCreate']);
    Route::post('admin/news-page-entry', [NewsPageController::class, 'NewsPageEntry']);
    Route::get('admin/news-page-edit/{id}', [NewsPageController::class, 'NewsPageEdit']);
    Route::post('admin/news-page-update/{id}', [NewsPageController::class, 'NewsPageUpdate']);


    Route::get('admin/news-series-list', [NewsSeriesController::class, 'NewsSeriesIndex']);
    Route::get('admin/news-series-create', [NewsSeriesController::class, 'NewsSeriesCreate']);
    Route::post('admin/news-series-entry', [NewsSeriesController::class, 'NewsSeriesEntry']);
    Route::get('admin/news-series-edit/{id}', [NewsSeriesController::class, 'NewsSeriesEdit']);
    Route::post('admin/news-series-update/{id}', [NewsSeriesController::class, 'NewsSeriesUpdate']);


    Route::get('admin/news-type-list', [NewsTypeController::class, 'NewsTypeIndex']);
    Route::get('admin/news-type-create', [NewsTypeController::class, 'NewsTypeCreate']);
    Route::post('admin/news-type-entry', [NewsTypeController::class, 'NewsTypeEntry']);
    Route::get('admin/news-type-edit/{id}', [NewsTypeController::class, 'NewsTypeEdit']);
    Route::post('admin/news-type-update/{id}', [NewsTypeController::class, 'NewsTypeUpdate']);


    Route::get('admin/news-status-list', [NewsStatusController::class, 'NewsStatusIndex']);
    Route::get('admin/news-status-create', [NewsStatusController::class, 'NewsStatusCreate']);
    Route::post('admin/news-status-entry', [NewsStatusController::class, 'NewsStatusEntry']);
    Route::get('admin/news-status-edit/{id}', [NewsStatusController::class, 'NewsStatusEdit']);
    Route::post('admin/news-status-update/{id}', [NewsStatusController::class, 'NewsStatusUpdate']);


    Route::get('admin/news-list', [NewsController::class, 'NewsIndex']);
    Route::get('admin/news-create', [NewsController::class, 'NewsCreate']);
    Route::post('admin/news-entry', [NewsController::class, 'NewsEntry']);
    Route::get('admin/news-edit/{id}', [NewsController::class, 'NewsEdit']);
    Route::get('admin/news-status/{id}', [NewsController::class, 'NewsStatus']);
    Route::post('admin/news-update/{id}', [NewsController::class, 'NewsUpdate']);

    //Axios Route
    Route::post('SubCategoryGetData',[AxiosCallController::class,'SubCategoryGetData']);
    Route::post('SubSubCategoryGetData',[AxiosCallController::class,'SubSubCategoryGetData']);
    Route::post('MenuItemGetData',[AxiosCallController::class,'MenuItemGetData']);
    Route::post('MenuSubItemGetData',[AxiosCallController::class,'MenuSubItemGetData']);
});







//Site Route Start
Route::get('/', [SiteController::class, 'HomePage']);

Route::post('/getTabData', [SiteController::class,'getTabData']);
Route::get('/topic/{news_tag_keyword}', [SiteController::class, 'NewsTagKeyword']);
Route::get('/search', [SiteController::class, 'SearchPage']);
Route::get('/details/{news_slug}', [SiteController::class, 'DetailsPage']);
Route::get('/{cat_slug}', [SiteController::class, 'CategoryPage']);
Route::get('/{cat_slug}/{sub_cat_slug}', [SiteController::class, 'SubCategoryPage']);

//Axios Route
Route::post('DistrictGetData',[AxiosCallController::class,'DistrictGetData']);
Route::post('UpazilaGetData',[AxiosCallController::class,'UpazilaGetData']);








