<?php

use Illuminate\Support\Facades\Route;
//EndPoint
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contacto",function(){
    return view('contacto');
});
Route::get("/dashboard",function(){
    return view('admin.dashboard');
});