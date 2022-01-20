<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodcastController;
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
// Route::get('/job/dispatch', 'PodcastController@index');
Route::get('/job/dispatch',  [PodcastController::class, 'index']);
Route::get('/job/dispatch/store',  [PodcastController::class, 'store']);
