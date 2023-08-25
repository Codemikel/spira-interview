<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Admin\HomeController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
