<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})
->middleware('isLogin');

Route::get('/index', function () {
    return view('index');
})->middleware('isLogin');

Route::get('/app-profile', function () {
    return view('app-profile');
})->middleware('isLogin');

Route::get('/coin-details', function () {
    return view('coin-details');
})->middleware('isLogin');

Route::get('/map-jqvmap', function () {
    return view('map-jqvmap');
})->middleware('isLogin');

Route::get('/market-capital', function () {
    return view('market-capital');
})->middleware('isLogin');

Route::get('/my-wallets', function () {
    return view('my-wallets');
})->middleware('isLogin');

Route::get('/page-error-400', function () {
    return view('errors.page-error-400');
});

Route::get('/page-error-403', function () {
    return view('errors.page-error-403');
});

Route::get('/page-error-404', function () {
    return view('errors.page-error-404');
});

Route::get('/page-error-500', function () {
    return view('errors.page-error-500');
});

Route::get('/page-error-503', function () {
    return view('errors.page-error-503');
});

Route::get('/portofolio', function () {
    return view('portofolio');
})->middleware('isLogin');


Route::get('/tranasactions', function () {
    return view('tranasactions');
})->middleware('isLogin');

Route::get('/post-details.html', function () {
    return view('post-details');
})->middleware('isLogin');
// Login

require __DIR__.'/auth.php';

