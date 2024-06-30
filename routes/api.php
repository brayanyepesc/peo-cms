<?php

use App\App\AuthClients\Controllers\AuthClientController;
use App\App\Employees\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/auth/client', [AuthClientController::class, 'index']);
Route::get('employees/client/{client_id}', [EmployeeController::class, 'index']);
Route::resource('employees', EmployeeController::class);

