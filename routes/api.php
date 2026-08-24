<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group([
    "controller" => UserController::class,
], function () {
    Route::post("/CheckActivationCode", "CheckActivationCode");
    Route::post("/sendLoginCode", "sendLoginCode");
    Route::post("/sendCode", "sendCode");
    Route::post("/loginCode", "loginCode");
    Route::post("/loginPass", "loginPass");
});