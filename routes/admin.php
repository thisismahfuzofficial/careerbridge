<?php


use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\VerifyController;
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
        Route::controller(VerifyController::class)->group(function () {
            Route::get('/requests', 'index')->name('requests');
            Route::post('/varify/user/{user}', 'varifyUser')->name('varify.user');
        });
        Route::controller(PostController::class)->prefix('posts')->as('posts.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::delete('post/delete/{post}','destroy')->name('delete');
        });

    });