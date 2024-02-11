<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\SuitController::class, 'suit'])->name('suit');

