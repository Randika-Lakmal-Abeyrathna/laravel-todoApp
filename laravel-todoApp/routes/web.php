<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/task', [TaskController::class, 'loadPage']);

Route::post('/savetask', [TaskController::class, 'saveData']);

Route::get('/markaspending/{id}', [TaskController::class, 'pending']);

Route::get('/markascompleted/{id}', [TaskController::class, 'complete']);

Route::get('/deletetask/{id}', [TaskController::class, 'deleteTask']);

Route::get('/updatetask/{id}', [TaskController::class, 'getUpdateData']);

Route::post('/update', [TaskController::class, 'updateTask']);
