<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ApiController;

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

Route::controller(AllowanceController::class)->prefix('allowances')->name('allowances')->group(function () {
    Route::delete('/{allowance}', 'destroy')->name('.destroy');
    Route::get('students', 'getAllStudents');
    Route::get('student{id}', 'getStudent');
    Route::post('stundents', 'createStudent');
    Route::put('student/{id}', 'updateStudent');
    Route::delete('student/{id}', 'deleteStudent');
});
