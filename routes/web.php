<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/{page}', [IndexController::class, 'people'])->name('people');

//Route::get('/{page}', IndexController::class)->where('page', '.*');
Route::get('/{any}', function (){
    return view('index');
})->where('any', '.*');
