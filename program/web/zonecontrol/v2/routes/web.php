<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TestController;
    use App\Http\Controllers\UserController;

    /*
   Route::get('/', function () {
        return view('welcome');
    }); */

    Route::get('/', [TestController::class, 'main']);
    Route::get('/profile', function () { return view('pages.profile'); })->middleware('auth');

    Auth::routes();