<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index']);
Route::get('/info', function () {
    phpinfo();die;
});

Route::get('/test/first', [TestController::class, 'first']);
Route::get('/test/second', [TestController::class, 'second']);
Route::get('/test/third', [TestController::class, 'third']);