<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/',[UserController::class, 'index'])->name('users'); 
Route::get('/user/edit/{id}',[UserController::class, 'edit'])->name('user.edit'); 
Route::delete('/user/destroy/{id}',[UserController::class, 'destroy'])->name('user.delete'); 
// Route::post('/user/update',[UserController::class, 'update'])->name('user.update'); 
Route::post('/user/store',[UserController::class, 'store'])->name('user.store'); 


