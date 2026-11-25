<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TestController;
    use App\Http\Controllers\UserController;

    /*
   Route::get('/', function () {
        return view('welcome');
        ->middleware('auth')
    }); */

    Route::get('/', [HomeController::class, 'test']);
    
    Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');