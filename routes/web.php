<?php

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
    return view('index');
});
//Route::get('/all-department', function () {
//    return view('departments');
//});
//Route::get('/all-user', function () {
//    return view('users');
//});
//Route::get('/user-by-id/{user_by_id}', function () {
//    return view('users');
//});
