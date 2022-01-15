<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\adminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\indexController::class, 'index'])->name('index');







//backend start

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[adminController::class, 'index'])->name('admin.home');
Route::get('/admin/login',[adminController::class, 'loginForm'])->name('admin.login');
Route::post('/login-save',[adminController::class, 'submit_login'])->name('admin.loginSave');
Route::get('/login/logout',[adminController::class, 'logout'])->name('admin.logout');






