<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\CategoriesController;


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



Route::get('/',[App\Http\Controllers\indexController::class, 'index'])->name('index');




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
