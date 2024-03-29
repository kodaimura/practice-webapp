<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api.phpに設定したら /api がつく形で受け付ける 
Route::get('/tasks', [TaskController::class, 'getTasks']);
Route::get('/tasks/{id}', [TaskController::class, 'getTask']);
Route::put('/tasks/{id}', [TaskController::class, 'putTask']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);
Route::post('/tasks', [TaskController::class, 'postTask']);