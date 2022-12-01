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
//Route::get('/get',[\App\Http\Controllers\ClassController::class,'getStuednt']);
//Route::get('/getStudent',[\App\Http\Controllers\StudentController::class,'getClass']);
//Route::get('getById/{id}',[\App\Http\Controllers\StudentController::class,'getById']);

//tamrin 1

Route::get('/test/{id}',[\App\Http\Controllers\ClassController::class,'get']);

//tamrin 2
Route::get('/getById/{id}',[\App\Http\Controllers\ClassController::class,'getById']);
