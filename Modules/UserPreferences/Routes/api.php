<?php

use Illuminate\Support\Facades\Route;
use Modules\UserPreferences\Http\Controllers\UserPreferencesController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('userpreferences', UserPreferencesController::class)->names('userpreferences');
});
