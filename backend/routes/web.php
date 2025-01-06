<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return [
        'status' => 200
    ];
});

Route::get('/tasks', [TaskController::class, 'index']);
