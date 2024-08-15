<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('myshop');
});

Route::get('/myshop', [UserController::class, 'myshop'])->name('web.myshop');