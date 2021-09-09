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
   * Go to creation of a post route
*/
Route::get('/p/create', [PostsController::class, 'create']);

// Store the post content
Route::post('/p', [PostsController::class, 'store']);

// Show the respective image clicked on the user profile
Route::get('/p/{post}', [PostsController::class, 'show']);

/* 
    * Go to a user profile
*/
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');

// Show respective user profile edit page
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit']);

// Action route for when we update the user profile 
Route::patch('/profile/{user}', [ProfilesController::class, 'update']);
