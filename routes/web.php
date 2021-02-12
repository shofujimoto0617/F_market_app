<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\MainAdminController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']], function() {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('user.index');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

// User All Route

Route::get('/user/logout', [MainUserController::class, 'Logout'])->name('user.logout');

Route::get('/user/profile', [MainUserController::class, 'UserProfile'])->name('user.profile');

Route::get('/user/profile/edit', [MainUserController::class, 'UserProfileEdit'])->name('profile.edit');

Route::post('/user/profile/update', [MainUserController::class, 'UserProfileUpdate'])->name('user.profile.update');

// Admin All Route

Route::get('/admin/profile', [MainAdminController::class, 'AdminProfile'])->name('admin.profile');

Route::get('/admin/profile/edit', [MainAdminController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

Route::post('/admin/profile/update', [MainAdminController::class, 'AdminProfileUpdate'])->name('admin.profile.update');