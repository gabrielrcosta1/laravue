<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    $title = 'ola mundo';
    $user = User::all();
    return Inertia::render('Home',[
        'title'=> $title,
        'users'=> $user
    ]);
});


Route::get('/users',[UserController::class,'index'])->name('users.index');

Route::post('/users',[UserController::class,'store'])->name('users.store');