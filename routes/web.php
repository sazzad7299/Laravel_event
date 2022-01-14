<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\CategoriesController;


Route::get('/',[App\Http\Controllers\indexController::class, 'index'])->name('index');



//backend start

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[adminController::class, 'index'])->name('admin.home');


//Category Controller
Route::get('/category-all',[CategoriesController::class,'allCategory'])->name('allCategory');
Route::get('/category-form',[CategoriesController::class,'addCategoryForm'])->name('addCategoryForm');

Route::post('/add-category',[CategoriesController::class,'storeCategory'])->name('storeCategory');
Route::get('/delete-category/{id}',[CategoriesController::class,'deleteCategory'])->name('deleteCategory');
Route::get('/edit-category/{id}',[CategoriesController::class,'editCategory'])->name('editCategory');
Route::post('/update-category/{id}',[CategoriesController::class,'updateCategory'])->name('updateCategory');
