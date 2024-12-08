<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
    
    Route::get('contact', [ContactController::class, 'create']);
    Route::post('contact', [ContactController::class, 'store1']);

