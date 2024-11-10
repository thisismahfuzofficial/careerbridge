<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth')->group(function () {

// });

Auth::routes();


Route::group(['controller' => PagesController::class, 'as' => 'page.'], function () {
    Route::get('/', 'index')->name('home');
    Route::get('/saved', 'saved')->name('saved');

});

//profile 
Route::group(['controller' => ProfileController::class, 'as' => 'profile.', 'prefix' => 'profile'], function () {
    Route::get('/', 'profile')->name('index');
});
Route::get('comming-soon', function () {
    return view('layouts.soon');
})->name('soon');

