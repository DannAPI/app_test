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

          Route::post('add-department', [App\Http\Controllers\DepartmentController::class, 'add_department']);
          Route::get('all-department', [App\Http\Controllers\DepartmentController::class, 'all_department']);
          Route::delete('delete-department/{id}', [App\Http\Controllers\DepartmentController::class,'delete_department']);

          Route::post('add-user', [App\Http\Controllers\UserController::class, 'add_user']);
          Route::get('all-user', [App\Http\Controllers\UserController::class, 'all_user']);
          Route::get('/user-by-id/{user_by_id}', [App\Http\Controllers\UserController::class, 'user_by_id']);

          Route::post('add-comment', [App\Http\Controllers\CommentController::class, 'add_comment']);



