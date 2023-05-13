<?php

use App\Http\Controllers\SeasonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Laravelデフォルト
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// 認証済みのAPI (CSRF込み) ※ sanctum やってくれることの概要 https://qiita.com/pikanji/items/040fa4ab6976059f3762
Route::middleware('auth:sanctum')->group(function () {
    // シーズン系
    Route::group(['prefix' => '/seasons', 'as' => 'api.seasons.'], function() {
        Route::get('/', [SeasonController::class, 'list'])->name('list'); // シーズン 一覧
    });
});