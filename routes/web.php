<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\CategoriesController;
<<<<<<< HEAD
use App\Http\Controllers\frontend\CategoriesShowController;
=======
use App\Http\Controllers\backend\EventController;

>>>>>>> 21cf22150ef461aa0c7e983ecfa61a340104b6a2


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

// Route::get('/',[App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/',[App\Http\Controllers\indexController::class, 'index'])->name('index');
Route::get('/about-us',[App\Http\Controllers\indexController::class, 'about'])->name('about');
Route::get('/gallery',[App\Http\Controllers\indexController::class, 'gallery'])->name('gallery');
Route::get('/schedules',[App\Http\Controllers\indexController::class, 'schedules'])->name('schedules');

//admin controlling
// Banner Controlling
Route::match(['get','post'],'add+&&+slider',[App\Http\Controllers\SliderController::class, 'addSlider'])->name('addslider');
Route::match(['get','post'],'edit-slider/{id}',[App\Http\Controllers\SliderController::class, 'editSlider'])->name('editslider');
Route::get('/view-slider',[App\Http\Controllers\SliderController::class, 'viewSlider'])->name('viewslider');
Route::match(['get','post'],'delete-slider/{id}',[App\Http\Controllers\SliderController::class, 'deleteSlider'])->name('deleteSlider');



Route::get('/categories',[CategoriesShowController::class,'all_category'])->name('show_cat_all');


//backend start

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[adminController::class, 'index'])->name('admin.home');
Route::get('/admin/login',[adminController::class, 'loginForm'])->name('admin.login');
Route::post('/login-save',[adminController::class, 'submit_login'])->name('admin.loginSave');
Route::get('/login/logout',[adminController::class, 'logout'])->name('admin.logout');






//Category Controller
Route::get('/category-all',[CategoriesController::class,'allCategory'])->name('allCategory');
Route::get('/category-form',[CategoriesController::class,'addCategoryForm'])->name('addCategoryForm');

Route::post('/add-category',[CategoriesController::class,'storeCategory'])->name('storeCategory');
Route::get('/delete-category/{id}',[CategoriesController::class,'deleteCategory'])->name('deleteCategory');
Route::get('/edit-category/{id}',[CategoriesController::class,'editCategory'])->name('editCategory');
Route::post('/update-category/{id}',[CategoriesController::class,'updateCategory'])->name('updateCategory');



//Event Routing
Route::get('/event-all',[EventController::class,'allEvent'])->name('allEvent');
Route::get('/event-form',[EventController::class,'addeventForm'])->name('addEventForm');

Route::post('/add-event',[EventController::class,'storeEvent'])->name('storeEvent');
Route::get('/delete-event/{id}',[EventController::class,'deleteEvent'])->name('eventDelete');
Route::get('/edit-event/{id}',[EventController::class,'eventEdit'])->name('eventEdit');
Route::post('/update-event/{id}',[EventController::class,'eventUpdate'])->name('eventUpdate');