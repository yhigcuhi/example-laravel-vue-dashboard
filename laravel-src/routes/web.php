<?php

use Illuminate\Foundation\Application;
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
// Laravel デフォルト
// Route::get('/', function () {
//     return view('welcome');
// });

// Breezeの Inertia 初期構築パクリ
Route::get('/', function () {
   return Inertia::render('Welcome', [
       'canLogin' => Route::has('login'),
       'canRegister' => Route::has('register'),
       'laravelVersion' => Application::VERSION,
       'phpVersion' => PHP_VERSION,
   ]);
});