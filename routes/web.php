<?php

use App\Http\Controllers\HomeController;
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
    return view('index2');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index2'])->name('home');
Route::post('/movieupload', [HomeController::class, 'movieupload']);
Route::get('/rate/{id}', [HomeController::class, 'rate']);
Route::post('/rating', [HomeController::class, 'rating']);
Route::get('/catalogue', [HomeController::class, 'catalogue']);
Route::get('/details', [HomeController::class, 'details']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/about', [HomeController::class, 'about']);
Route::post('/search', [HomeController::class, 'search']);
Route::get('/comments', [HomeController::class, 'comments']);



//Route::get('/about', [VisitorController::class, 'about']);
//Route::post('/adminsignin', [CreatorsController::class, 'adminsignin']);
