<?php

use App\Http\Controllers\backend\ExpenseClaimController;
use App\Http\Controllers\backend\MileageClaimController;
use App\Http\Controllers\backend\OvertimeClaimController;
use App\Http\Controllers\backend\LeaveRequestController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {


    // dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // expense claim
    Route::get('/expense-claim', [ExpenseClaimController::class, 'index'])->name('expense-claim.index');
    Route::get('/expense-claim/create', [ExpenseClaimController::class, 'create'])->name('expense-claim.create');
    Route::post('/expense-claim', [ExpenseClaimController::class, 'store'])->name('expense-claim.store');
    Route::get('/expense-claim/{id?}', [ExpenseClaimController::class, 'show'])->name('expense-claim.show');
    Route::get('/expense-claim/delete/{id?}', [ExpenseClaimController::class, 'destroy'])->name('expense-claim.destroy');

    // mileage claim
    Route::get('/mileage-claim', [MileageClaimController::class, 'index'])->name('mileage-claim.index');
    Route::get('/mileage-claim/create', [MileageClaimController::class, 'create'])->name('mileage-claim.create');
    Route::post('/mileage-claim', [MileageClaimController::class, 'store'])->name('mileage-claim.store');
    Route::get('/mileage-claim/{id?}', [MileageClaimController::class, 'show'])->name('mileage-claim.show');
    Route::get('/mileage-claim/delete/{id?}', [MileageClaimController::class, 'destroy'])->name('mileage-claim.destroy');

    // overtime claim
    Route::get('/overtime-claim', [OvertimeClaimController::class, 'index'])->name('overtime-claim.index');

    // leave request
    Route::get('/leave-request', [LeaveRequestController::class, 'index'])->name('leave-request.index');
    Route::get('/leave-request/create', [LeaveRequestController::class, 'create'])->name('leave-request.create');
    Route::post('/leave-request/store', [LeaveRequestController::class, 'store'])->name('leave-request.store');
    Route::get('/leave-request/{id?}', [LeaveRequestController::class, 'show'])->name('leave-request.show');
    Route::get('/leave-request/delete/{id?}', [LeaveRequestController::class, 'destroy'])->name('leave-request.destroy');
});
