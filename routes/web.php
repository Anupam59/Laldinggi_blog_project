<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
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


