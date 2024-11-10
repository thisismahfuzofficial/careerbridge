<?php


use App\Http\Controllers\Admin\PagesController;
use Illuminate\Support\Facades\Route;


Route::middleware(['role:admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/test', function () {
            dd(auth()->user()->state->name); 
            // return redirect()->back()->with('success', 'it works');
        });
        Route::controller(PagesController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
        });
    });