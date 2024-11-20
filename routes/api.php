<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\StudentController; // แก้ไขชื่อ namespace ให้ถูกต้อง

// Route to get the authenticated user’s data with Sanctum middleware
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route to call getData method from APIController
Route::get('/getData', [APIController::class, 'getData']);

Route::controller(StudentController::class)->group(function(){
    Route::post('/addstudent','AppData'); // แก้ไขชื่อเมธอดเป็น AppData
});