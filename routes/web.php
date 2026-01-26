<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckTimeAccess;
use Illuminate\Support\Facades\Route;


Route::prefix('/auth')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('/ageVerifi', "ageVerifi");
        Route::get('/ageVerifiView', "ageVerifiView")->name('auth.ageVerifiView');
    });
});

Route::middleware('age.check')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/hello', function () {
        return view('hello');
    });

    Route::get('/test', function () {
        return response()->json("Hello world");
    });

    Route::prefix('/auth')->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('/loginView', "loginView")->name('auth.loginView');
            Route::post('/login', "login");
            Route::get('/registerView', "registerView");
            Route::post('/register', "register");
        });
    });

    Route::prefix('/product')->group(function () {
        Route::controller(ProductController::class)->group(function () {
            Route::get('/', "index");
            Route::get('/add', "create")->name('add');
            Route::get('/detail/{id?}', "getDetail");
            Route::post('/store', 'store');
        });
    });

    Route::resource('/test', TestController::class);

    Route::get('/sinhvien/{name?}/{mssv?}', function (?string $name = "Luong Xuan Hieu", ?string $mssv = "123456") {
        return view('sinhvien.detail', ['name' => $name, 'mssv' => $mssv]);
    });

    Route::get('/banco/{n}', function (int $n) {
        return view('banco.index', ['n' => $n]);
    });
});

Route::fallback(function () {
    return view('error.404');
});
