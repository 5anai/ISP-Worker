<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('workers', [\App\Http\Controllers\WorkerController::class, 'createWorker']);
Route::get('workers', [\App\Http\Controllers\WorkerController::class, 'retreive']);
Route::put('workers/{id}', [\App\Http\Controllers\WorkerController::class, 'update']);
Route::delete('workers/{id}', [\App\Http\Controllers\WorkerController::class, 'destroy']);
Route::get('workers', [\App\Http\Controllers\WorkerController::class, 'index']);

