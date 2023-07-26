<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsPageController;
use App\Http\Controllers\Admin\NewsTypeController;
use App\Http\Controllers\Admin\SiteCommonController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SubSubCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::middleware('alreadyLoggedIn')->group(function (){
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('validate_login', [CustomAuthController::class, 'validate_login'])->name('sample.validate_login');
});
Route::get('registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::post('validate_registration', [CustomAuthController::class, 'validate_registration'])->name('sample.validate_registration');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::middleware('isLoggedIn')->group(function (){
    Route::get('/', function () {return view('welcome');});
    Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
});



Route::get('dashboard', [DashboardController::class, 'DashboardIndex']);

Route::get('user-list', [UserController::class, 'UserIndex']);


Route::get('category-list', [CategoryController::class, 'CategoryIndex']);
Route::get('category-create', [CategoryController::class, 'CategoryCreate']);
Route::post('category-entry', [CategoryController::class, 'CategoryEntry']);
Route::get('category-edit/{id}', [CategoryController::class, 'CategoryEdit']);
Route::post('category-update/{id}', [CategoryController::class, 'CategoryUpdate']);



Route::get('sub-category-list', [SubCategoryController::class, 'SubCategoryIndex']);
Route::get('sub-category-create', [SubCategoryController::class, 'SubCategoryCreate']);
Route::post('sub-category-entry', [SubCategoryController::class, 'SubCategoryEntry']);
Route::get('sub-category-edit/{id}', [SubCategoryController::class, 'SubCategoryEdit']);
Route::post('sub-category-update/{id}', [SubCategoryController::class, 'SubCategoryUpdate']);


Route::get('sub-sub-category-list', [SubSubCategoryController::class, 'SubSubCategoryIndex']);
Route::get('sub-sub-category-create', [SubSubCategoryController::class, 'SubSubCategoryCreate']);
Route::post('sub-sub-category-entry', [SubSubCategoryController::class, 'SubSubCategoryEntry']);
Route::get('sub-sub-category-edit/{id}', [SubSubCategoryController::class, 'SubSubCategoryEdit']);
Route::post('sub-sub-category-update/{id}', [SubSubCategoryController::class, 'SubSubCategoryUpdate']);
Route::post('SubCategoryGetData',[SubSubCategoryController::class,'SubCategoryGetData']);



Route::get('about-edit', [SiteCommonController::class, 'AboutEdit']);
Route::post('about-update', [SiteCommonController::class, 'AboutUpdate']);
Route::get('communication-edit', [SiteCommonController::class, 'CommunicationEdit']);
Route::post('communication-update', [SiteCommonController::class, 'CommunicationUpdate']);
Route::get('policy-edit', [SiteCommonController::class, 'PolicyEdit']);
Route::post('policy-update', [SiteCommonController::class, 'PolicyUpdate']);
Route::get('terms-edit', [SiteCommonController::class, 'TermsEdit']);
Route::post('terms-update', [SiteCommonController::class, 'TermsUpdate']);
Route::get('info-edit', [SiteCommonController::class, 'InfoEdit']);
Route::post('info-update', [SiteCommonController::class, 'InfoUpdate']);



Route::get('menu-list', [MenuController::class, 'MenuIndex']);
Route::get('menu-create', [MenuController::class, 'MenuCreate']);
Route::post('menu-entry', [MenuController::class, 'MenuEntry']);
Route::get('menu-edit/{id}', [MenuController::class, 'MenuEdit']);
Route::post('menu-update/{id}', [MenuController::class, 'MenuUpdate']);



Route::get('menu-item-list', [MenuController::class, 'MenuItemIndex']);
Route::get('menu-item-create', [MenuController::class, 'MenuItemCreate']);
Route::post('menu-item-entry', [MenuController::class, 'MenuItemEntry']);
Route::get('menu-item-edit/{id}', [MenuController::class, 'MenuItemEdit']);
Route::post('menu-item-update/{id}', [MenuController::class, 'MenuItemUpdate']);



Route::get('menu-sub-item-list', [MenuController::class, 'MenuSubItemIndex']);
Route::get('menu-sub-item-create', [MenuController::class, 'MenuSubItemCreate']);
Route::post('menu-sub-item-entry', [MenuController::class, 'MenuSubItemEntry']);
Route::get('menu-sub-item-edit/{id}', [MenuController::class, 'MenuSubItemEdit']);
Route::post('menu-sub-item-update/{id}', [MenuController::class, 'MenuSubItemUpdate']);

Route::post('MenuItemGetData',[MenuController::class,'MenuItemGetData']);
Route::post('MenuSubItemGetData',[MenuController::class,'MenuSubItemGetData']);

Route::get('menu-sub-sub-item-list', [MenuController::class, 'MenuSubSubItemIndex']);
Route::get('menu-sub-sub-item-create', [MenuController::class, 'MenuSubSubItemCreate']);
Route::post('menu-sub-sub-item-entry', [MenuController::class, 'MenuSubSubItemEntry']);
Route::get('menu-sub-sub-item-edit/{id}', [MenuController::class, 'MenuSubSubItemEdit']);
Route::post('menu-sub-sub-item-update/{id}', [MenuController::class, 'MenuSubSubItemUpdate']);




Route::get('news-page-list', [NewsPageController::class, 'NewsPageIndex']);
Route::get('news-page-create', [NewsPageController::class, 'NewsPageCreate']);
Route::post('news-page-entry', [NewsPageController::class, 'NewsPageEntry']);
Route::get('news-page-edit/{id}', [NewsPageController::class, 'NewsPageEdit']);
Route::post('news-page-update/{id}', [NewsPageController::class, 'NewsPageUpdate']);


Route::get('news-type-list', [NewsTypeController::class, 'NewsTypeIndex']);
Route::get('news-type-create', [NewsTypeController::class, 'NewsTypeCreate']);
Route::post('news-type-entry', [NewsTypeController::class, 'NewsTypeEntry']);
Route::get('news-type-edit/{id}', [NewsTypeController::class, 'NewsTypeEdit']);
Route::post('news-type-update/{id}', [NewsTypeController::class, 'NewsTypeUpdate']);


