<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

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

// Route::group(['middleware'=>'guest'],function(){
    Route::get('/', [AuthController::class,'index'])->name('login');
    // Route::get('login', [AuthController::class,'index'])->name('login');
    Route::post('login', [AuthController::class,'login'])->name('login');

    Route::get('register', [AuthController::class,'register_view'])->name('register');
    Route::post('register', [AuthController::class,'register'])->name('register');
// });
// Route::group(['middleware'=>'auth'],function(){
    // Route::get('home', [AuthController::class,'home'])->name('home');
    Route::get('logout', [AuthController::class,'logout'])->name('logout');
// });

Route::get('/list', [CategoryController::class,'list'])->name('list');

Route::get('/category-create', [CategoryController::class,'create']);
Route::post('/category-store', [CategoryController::class,'store']);
Route::get('/category-edit/{id}', [CategoryController::class,'edit']);
Route::put('/category-update/{id}', [CategoryController::class,'update']);