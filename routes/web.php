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
Route::get('/',[App\Http\Controllers\IndexController::class, 'index'])->name('index');



//admin controlling
// Banner Controlling
Route::match(['get','post'],'add+&&+slider',[App\Http\Controllers\SliderController::class, 'addSlider'])->name('addslider');
Route::match(['get','post'],'edit-slider/{id}',[App\Http\Controllers\SliderController::class, 'editSlider'])->name('editslider');
Route::get('/view-slider',[App\Http\Controllers\SliderController::class, 'viewSlider'])->name('viewslider');
Route::match(['get','post'],'delete-slider/{id}',[App\Http\Controllers\SliderController::class, 'deleteSlider'])->name('deleteSlider');



//backend start

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[adminController::class, 'index'])->name('admin.home');


