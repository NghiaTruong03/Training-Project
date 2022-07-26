<?php

use App\Http\Controllers\shop\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

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


//Home Page
    //...
    //Home
    Route::get('/', [HomeController::class,'index'])->name('shop.index');
    //Product list
    Route::get('product_list',[HomeController::class,'product_list'])->name('product.list');
    //Product detail
    Route::get('product_detail/{id}',[HomeController::class,'product_detail'])->name('product.detail');
    //Filter
    Route::get('category/{id}',[HomeController::class,'categoryFilter'])->name('category.select');


//Admin page

    //register
    Route::get('register', [UserController::class, 'register'])->name('user.register');
    Route::post('register/store', [UserController::class, 'store'])->name('user.store');
    
    //login
    Route::get('login', [UserController::class, 'login'])->name('user.login');
    Route::post('login/check', [UserController::class, 'check'])->name('user.check');

    //logout
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');

    //Category
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');  

    //Product
    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::get('product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');  
    Route::get('product/datatable', [UserController::class, 'dataTable'])->name('list.product.datatable');



