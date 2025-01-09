<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
  })->name('about');

  Route::get('/contact', function () {
      return view('contact');
    })->name('contact');

Route::resource('event', EventController::class)->except('index');
Route::get('/',[EventController::class, 'index'])->name('event.index');
