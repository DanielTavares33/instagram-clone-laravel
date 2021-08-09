<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;

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


/* 
    * Go to a user profile
*/
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');

/*
   * Go to creation of a post route
*/
Route::get('/p/create', [PostsController::class, 'create']);

/* 
    * Store the post content
*/
Route::get('/p', [PostsController::class, 'store']);
