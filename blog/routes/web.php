<?php

use Illuminate\Support\Facades\Route;
//EndPoint
Route::get('/', function () {
    return view('welcome');
});
Route::get("/contacto",function(){
    return view('contacto');
});