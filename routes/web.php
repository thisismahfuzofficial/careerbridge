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


Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'profile')->name('profile.index');
        Route::get('/edit/profile/{user}', 'edit')->name('profile.edit');
        Route::post('/profile/update', 'update')->name('profile.update');
    });
});

Route::get('comming-soon', function () {
    return view('layouts.soon');
})->name('soon');

