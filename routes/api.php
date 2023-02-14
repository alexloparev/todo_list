<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ImageController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\TodosController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/auth', [AuthController::class, 'auth']);

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('todos', [TodosController::class, 'index']);
    Route::post('todos/{todo}', [TodosController::class, 'edit']);
    Route::post('todos', [TodosController::class, 'create']);
    Route::delete('todos/{todo}', [TodosController::class, 'delete']);

    Route::get('tags', [TagController::class, 'index']);
    Route::get('tags/{tag}', [TagController::class, 'filter']);
    Route::post('tags', [TagController::class, 'add']);

    Route::post('image', [ImageController::class, 'add']);

});
