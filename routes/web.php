<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SiteCommonController;
use App\Http\Controllers\Admin\SubCategoryController;
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


