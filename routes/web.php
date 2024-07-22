<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contacts', [ContactsController::class, 'sendMail'])->name('contacts');