<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StatsController;
use App\Http\Controllers\Admin\SubmissionController;

Route::middleware(['auth:api'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/stats', [StatsController::class, 'index']);
    Route::get('/submissions/pending', [SubmissionController::class, 'pending']);
});