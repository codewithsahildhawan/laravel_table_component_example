<?php

use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usertable', [TableController::class, 'index'])->name('table.users');