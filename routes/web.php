<?php

use App\Http\Controllers\dashboard\articleDashboardController;
use App\Http\Controllers\dashboard\galleryDashboardController;
use App\Http\Controllers\dashboard\userDashboardController;
use App\Http\Controllers\profilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\adminDashboardController;

// ROUTE MAIN
Route::get('/', [pageController::class, 'homepage']);
Route::get('/about', [pageController::class, 'about']);
Route::get('/contact', [pageController::class, 'contact']);
Route::get('/service', [pageController::class, 'service']);


// GALLERIES RUTE
Route::get('/galleries', [galleryController::class, 'index']);

// ARTICLES RUTE
Route::get('/article', [articleController::class, 'index']);
Route::get('/article/{article:slug}', [articleController::class, 'show'])->middleware('auth');


Route::middleware('auth')->group(function () {
    // PROFIL RUTE
    Route::get('/profil/{user:username}', [profilController::class, 'index']);
    Route::get('/profil/{user:username}/edit', [profilController::class, 'edit']);
    Route::put('/profil/{user:username}/edit', [profilController::class, 'update']);
    Route::get('/profil/{user:username}/resetPassword', [profilController::class, 'resetPass']);
    Route::put('/profil/{user:username}/resetPassword', [profilController::class, 'updatePass']);
    Route::get('/profil/{user:username}/deleteAccount', [profilController::class, 'delete']);
    Route::delete('/profil/{user:username}/deleteAccount', [profilController::class, 'destroy']);
    Route::get('/profil/{slug}/logout', [profilController::class, 'logout']);
});


Route::middleware('guest')->group(function () {
    // ROUTE LOGIN
    Route::get('/login', [loginController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/login', [loginController::class, 'authenticate'])->middleware('guest');

    // ROUTE REGISTER
    Route::get('/register', [registerController::class, 'index'])->middleware('guest');
    Route::post('/register', [registerController::class, 'store'])->middleware('guest');
});


// LOGOUT
Route::get('/logout', [loginController::class, 'logout'])->middleware('auth');


Route::middleware('role:admin')->group(function () {
    // DASHBOARD
    Route::get('/companyDashboard', [dashboardController::class, 'index']);

    // DASHBOARD USER
    Route::get('/companyDashboard/users', [userDashboardController::class, 'index']);
    Route::get('/companyDashboard/users/{user:username}', [userDashboardController::class, 'show']);
    Route::delete('/companyDashboard/users/{user:username}', [userDashboardController::class, 'destroy']);
    Route::get('/companyDashboard/user/trash', [userDashboardController::class, 'trash']);
    Route::post('/companyDashboard/user/trash', [userDashboardController::class, 'action']);


    // DASHBOARD ARTICLE
    Route::resource('/companyDashboard/articles', articleDashboardController::class);
    Route::get('/companyDashboard/article/trash', [articleDashboardController::class, 'trash']);
    Route::post('/companyDashboard/article/trash', [articleDashboardController::class, 'action']);

    // DASHBOARD GALLERY
    Route::resource('/companyDashboard/galleries', galleryDashboardController::class)->except('show');
    Route::get('/companyDashboard/gallery/trash', [galleryDashboardController::class, 'trash']);
    Route::post('/companyDashboard/gallery/trash', [galleryDashboardController::class, 'action']);

});

Route::middleware('role:owner')->group(function () {

    // DASHBOARD ADMIN
    Route::get('/companyDashboard/admin', [adminDashboardController::class, 'index']);
    Route::get('/companyDashboard/admin/{user:username}', [adminDashboardController::class, 'show']);
    Route::delete('/companyDashboard/admin/{user:username}', [adminDashboardController::class, 'destroy']);

});

