<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TestController;
    use App\Http\Controllers\UserController;

    /*
   Route::get('/', function () {
        return view('welcome');
    }); */

    Route::get('/', [TestController::class, 'test']);
    //Route::get('/profile', function () { return view('pages.profile'); })->middleware('auth');

    Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');