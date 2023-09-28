<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('students', [StudentController::class, 'index']);
Route::get('students/{students}/show', [StudentController::class, 'show']);
Route::post('students/store', [StudentController::class, 'store']);
Route::put('students/update/{id}', [StudentController::class, 'update']);
Route::post('students/{id}/delete', [StudentController::class, 'delete']);
