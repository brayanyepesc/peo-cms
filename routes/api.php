<?php

use App\App\AuthClients\Controllers\AuthClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/auth/client', [AuthClientController::class, 'index']);
