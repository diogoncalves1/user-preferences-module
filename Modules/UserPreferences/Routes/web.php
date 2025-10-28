<?php

use Illuminate\Support\Facades\Route;
use Modules\UserPreferences\Http\Controllers\UserPreferencesController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('userpreferences', UserPreferencesController::class)->names('userpreferences');
});
