<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('rest',\App\Http\Controllers\RestTestController::class)
    ->names('RestTest');

Route::resource('blog/post',\App\Http\Controllers\Blog\PostController::class);


///////////////////////////////

Route::resource('blog/admin/categories',\App\Http\Controllers\Blog\admin\CategoryController::class)
    ->names('blog.admin.category');
