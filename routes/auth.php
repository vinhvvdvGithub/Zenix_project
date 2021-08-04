<?php
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::post('login', [UsersController::class, 'login'])
->name('login');

Route::post('register', [UsersController::class, 'register'])
->name('register');

Route::get('logout', [UsersController::class, 'logout']);

Route::get('/page-forgot-password.html', function () {
    return view('auth.page-forgot-password');
})->middleware('isLogout');

Route::get('/page-lock-screen.html', function () {
    return view('auth.page-lock-screen');
});

Route::get('/page-login.html', function () {
    return view('auth.page-login');
})->middleware('isLogout');

Route::get('/page-register.html', function () {
    return view('auth.page-register');
})->middleware('isLogout');