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

          Route::post('add-department', [App\Http\Controllers\DepartmentController::class, 'add_department'])->name('depart');
          Route::get('all-department', [App\Http\Controllers\DepartmentController::class, 'all_department'])->name('all');
          Route::delete('delete-department/{id}', [App\Http\Controllers\DepartmentController::class,'delete_department'])->name('delete');

          Route::post('add-user', [App\Http\Controllers\UserController::class, 'add_user'])->name('add');
          Route::get('all-user', [App\Http\Controllers\UserController::class, 'all_user'])->name('users');
          Route::get('/user-by-id/{user_by_id}', [App\Http\Controllers\UserController::class, 'user_by_id'])->name('user_by_id') ;




