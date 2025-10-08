<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;

//EndPoint
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contacto",function(){
    return view('contacto');
});
Route::get("/post",function(){
    return view('post');
});
Route::get("/about",function(){
    return view('about');
});
Route::group(['prefix'=>'dashboard'],function(){
    Route::resource('/',DashboardController::class);
    Route::resource('/post',PostsController::class);
    Route::get('/post/actions/add',[PostsController::class,'showAdd']);
    Route::get("/users",[UsersController::class,'getUsers']);
    Route::post("/users",[UsersController::class,'createUsers']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
