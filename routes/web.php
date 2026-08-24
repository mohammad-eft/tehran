<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Middleware\AuthMiddleware;

Route::view('/', 'welcome')->name('home');
Route::view("/Dashbord", "Dashbord")->name("Dashbord");
Route::view("/signup", "signup")->name("signup");
Route::view("/login", "login")->name("login");
Route::post('/loginWithActivationCode', [UserController::class, 'loginWithActivationCode'])->name('loginWithActivationCode');
Route::post('/check-activation-code', [UserController::class, 'checkActivationCode'])->name('checkActivationCode');
Route::post('/send_code', [UserController::class, 'send_code'])->name('send_code');
Route::post('/removeActivationCode', [UserController::class, 'removeActivationCode'])->name('removeActivationCode');

Route::group([
    'prefix'=>'article',
    'controller'=>ArticleController::class,
    'middleware'=>[AuthMiddleware::class],
    'as'=>'article.'
], function (){
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{article}', 'edit')->name('edit');
    Route::post('/update/{article}', 'update')->name('update');
    Route::get('/delete/{article}', 'delete')->name('delete');
    Route::get('/single/{article}', 'single')->name('single');
    Route::get('/list', 'list')->name('list');
});

Route::group([
    "prefix" => "User",
    "controller" => UserController::class,
    "as" => "user.",
], function () {
    // SignUp
    Route::post("/createSignUp", "createSignup")->name("createSignup");

    // login
    Route::post("/LoginUser", "LoginUser")->name("LoginUser");

    // logOut
    Route::get("/logOut", "logOut")->name("logOut");

    Route::post('/check', 'check')->name('check');
    Route::post('/checkFromMenu', 'checkFromMenu')->name('checkFromMenu');
});
