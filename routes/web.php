<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'attempt'])->name('login.attempt');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('staff')->middleware('role:Admin')->group(function () {
        Route::get('/', [StaffController::class, 'index'])->name('staff.index');
        Route::get('create', [StaffController::class, 'create'])->name('staff.create');
        Route::get('edit/{user}', [StaffController::class, 'edit'])->name('staff.edit');
        Route::get('export', [StaffController::class, 'export'])->middleware('can:export staff csv')->name('staff.export');
    });

    Route::prefix('patients')->group(function () {
        Route::get('/', [PatientController::class, 'index'])->name('patients.index');
        Route::get('create', [PatientController::class, 'create'])->name('patients.create');
        Route::get('edit/{patient}', [PatientController::class, 'edit'])->name('patients.edit');
        Route::get('export', [PatientController::class, 'export'])->name('patients.export');
        Route::get('{patient}', [PatientController::class, 'show'])->name('patients.show');
        Route::get('{patient}/export', [PatientController::class, 'exportRecords'])->middleware('can:export patient csv')->name('patients.export_records');
    });
});
