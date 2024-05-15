<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('devices', [DeviceController::class, 'index']);
Route::post('devices', [DeviceController::class, 'store']);
Route::get('devices/{id}', [DeviceController::class, 'show']);
Route::put('devices/{id}', [DeviceController::class, 'update']);
Route::delete('devices/{id}', [DeviceController::class, 'destroy']);
