<?php


use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\SkillController;
use Illuminate\Support\Facades\Route;


Route::middleware(['role:admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/test', function () {
            // dd(auth()->user()->state->name); 
            return redirect()->back()->with('success', 'it works');
        });
        Route::controller(PagesController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
        });
        Route::controller(SkillController::class)->group(function () {
            Route::get('/skills', 'index')->name('skills');
            Route::post('/skills/store', 'store')->name('skills.store');
            Route::post('/skills/update/{skill}', 'update')->name('skills.update');
            Route::delete('/skills/delete/{skill}', 'destroy')->name('skills.delete');
        });
    });