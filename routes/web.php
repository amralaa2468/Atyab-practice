<?php

use App\Http\Controllers\HomeController;
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

//files upload and delete
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::post('store', [HomeController::class, 'store'])->name('store');
// Route::get('delete', [HomeController::class, 'delete'])->name('delete');

//file manipulation
Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("test", [HomeController::class, "test"])->name("test");
