<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\ArticleAdminController;
use App\Http\Controllers\StatistiquesController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('dashbord');
});

// Route::get('/hotel', function () {
//     return view('hotel');
// });
// Route::get('/tronsport', function () {
//     return view('tronsport');
// });
Route::get('/hotelHome', function () {
    return view('hotelHome');
});

Route::get('/transportHome', function () {
    return view('transportHome');
});
Route::get('/clients', function () {
    return view('clients');
});
                
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('articles', ArticleController::class);
Route::resource('comments', CommentController::class);
Route::resource('likes', LikeController::class);

Route::resource('hotel', HotelController::class);

Route::resource('transports', TransportController::class);
Route::resource('blogDashboard', ArticleAdminController::class);

Route::get('/noha',[StatistiquesController::class ,'count']);
// Route::get('/noha',[StatistiquesController::class ,'countHotel']);