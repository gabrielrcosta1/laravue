<?php

use App\Http\Controllers\CountController;
use App\Http\Controllers\UserController;
use App\Models\Count;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    $title = 'ola mundo';
    $user = User::all();
    return Inertia::render('Home',[
        'title'=> $title,
        'users'=> $user
    ]);
})->middleware('guest')->name('login');

Route::get('/counte', function () {
    $title = 'ola mundo';
    $user = User::all();
    return Inertia::render('Home',[
        'title'=> $title,
        'users'=> $user
    ]);
});


Route::get('/counter',[CountController::class,'index'])->name('home.index');
Route::post('/counter/increment', [CountController::class, 'increment']);
// Route::get('/counte', [CountController::class, 'show']);
// Route::post('/counter/increment', [CountController::class, 'increment']);
// Route::post('/users',[UserController::class,'store'])->name('users.store');