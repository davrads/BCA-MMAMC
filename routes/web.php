<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/gallery',[PageController::class,'gallery'])->name('gallery');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/notice',[PageController::class,'notice'])->name('notice');
Route::get('gallery/{id}',[PageController::class,'galleryById']);
