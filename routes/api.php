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

Route::controller(StudentController::class)->group(function () {
    Route::post('/addstudent', 'AppData');
    Route::put('/updatestudent/{id}', 'UpdateData');
    Route::patch('/patchstudent/{id}', 'UpdatePatchData');
    Route::delete('/deletestudent/{id}', 'DeleteData');
});

Route::controller(APIController::class)->group(function () {
    Route::get('/getdata', [APIController::class, 'getData']);
    Route::get('/getpostdata', [APIController::class, 'getPostData']);
    Route::get('/getpostdatabyid/{id}', [APIController::class, 'GetPostDataById']);
    Route::get('/getusers', [APIController::class, 'getUsers']);
});
