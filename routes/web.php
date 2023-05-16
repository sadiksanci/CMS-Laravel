<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about.us');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/services',[ServiceController::class,'getService'])->name('services');
Route::get('/services/details',[ServiceController::class,'serviceDetail'])->name('service.details');

Route::get('/blog',[BlogController::class,'getBlog'])->name('blog');
Route::get('/blog/details',[BlogController::class,'blogDetail'])->name('blog.details');



Route::post('/change-language',[HomeController::class,'changeLang'])->name('change.lang');
