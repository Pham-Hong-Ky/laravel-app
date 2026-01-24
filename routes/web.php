<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/test', function () {
    return response()->json("Hello world");
});

Route::prefix('/product')->group(function () {

    Route::controller(ProductController::class) -> group(function() {
        Route::get('/', "index");
        Route::get('/add', "create")->name('add');
        Route::get('/detail/{id?}', "getDetail");
        Route::post('/store', 'store');
    });

    // Route::get('/', [ProductController::class, "index"]);
    // Route::get('/add', [ProductController::class, "create"])->name('add');
    // Route::get('/detail/{id?}', [ProductController::class, "getDetail"] );
});

Route::prefix('/auth')->group(function() {
    Route::controller(AuthController::class)->group(function() {
        Route::get('/loginView', "loginView");
        Route::post('/login', "login");
        Route::get('registerView', "registerView");
        Route::post('register', "register");
    });
});

Route::get('/sinhvien/{name?}/{mssv?}', function (?string $name = "Luong Xuan Hieu", ?string $mssv = "123456") {
    return view('sinhvien.detail', ['name' => $name, 'mssv' => $mssv]);
});

Route::get('/banco/{n}', function (int $n) {
    return view('banco.index', ['n' => $n]);
});

Route::fallback(function () {
    return view('error.404');
});
