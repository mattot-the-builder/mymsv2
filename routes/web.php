<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\backend\CourseController;
use App\Http\Controllers\backend\ExpenseClaimController;
use App\Http\Controllers\backend\MileageClaimController;
use App\Http\Controllers\backend\OvertimeClaimController;
use App\Http\Controllers\backend\LeaveRequestController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\StaffController;
use App\Http\Controllers\backend\StudentRegistrationController;
use App\Http\Controllers\HomeController;
use App\Mail\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Route::get('/test', [StudentRegistrationController::class, 'invoiceTest']);
Route::view('/invoice', 'backend.student-registration.invoice');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/send-invoice/{name?}', function ($name) {
    $invoice = new Invoice($name);
    return $invoice->render();
})->name('email.invoice');

Route::get('/send-receipt/{id?}', [EmailController::class, 'receipt'])->name('email.receipt');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {


    // dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // user
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::post('/user/{keyword?}', [UserController::class, 'index'])->name('user.search');
    Route::get('/user/export', [UserController::class, 'exportAsExcel'])->name('user.export.excel');
    Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/user/delete/{id?}', [UserController::class, 'destroy'])->name('user.destroy');

    // staff
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
    Route::post('/staff/{keyword?}', [StaffController::class, 'index'])->name('staff.search');
    Route::get('/staff/export', [StaffController::class, 'exportAsExcel'])->name('staff.export.excel');
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::get('/staff/{id?}', [StaffController::class, 'show'])->name('staff.show');
    Route::get('/staff/accept/{id?}', [StaffController::class, 'accept'])->name('staff.accept');
    Route::get('/staff/reject/{id?}', [StaffController::class, 'reject'])->name('staff.reject');
    Route::get('/staff/delete/{id?}', [StaffController::class, 'destroy'])->name('staff.destroy');

    // expense claim
    Route::get('/expense-claim', [ExpenseClaimController::class, 'index'])->name('expense-claim.index');
    Route::post('expense-claim/{keyword?}', [ExpenseClaimController::class, 'index'])->name('expense-claim.search');
    Route::get('/expense-claim/export', [ExpenseClaimController::class, 'exportAsExcel'])->name('expense-claim.export.excel');
    Route::get('/expense-claim/create', [ExpenseClaimController::class, 'create'])->name('expense-claim.create');
    Route::get('/expense-claim/{id?}', [ExpenseClaimController::class, 'show'])->name('expense-claim.show');
    Route::get('/expense-claim/accept/{id?}', [ExpenseClaimController::class, 'accept'])->name('expense-claim.accept');
    Route::get('/expense-claim/reject/{id?}', [ExpenseClaimController::class, 'reject'])->name('expense-claim.reject');
    Route::get('/expense-claim/delete/{id?}', [ExpenseClaimController::class, 'destroy'])->name('expense-claim.destroy');

    // mileage claim
    Route::get('/mileage-claim', [MileageClaimController::class, 'index'])->name('mileage-claim.index');
    Route::post('/mileage-claim', [MileageClaimController::class, 'store'])->name('mileage-claim.store');
    Route::post('/mileage-claim/{keyword?}', [MileageClaimController::class, 'index'])->name('mileage-claim.search');
    Route::get('/mileage-claim/export', [MileageClaimController::class, 'exportAsExcel'])->name('mileage-claim.export.excel');
    Route::get('/mileage-claim/create', [MileageClaimController::class, 'create'])->name('mileage-claim.create');
    Route::get('/mileage-claim/{id?}', [MileageClaimController::class, 'show'])->name('mileage-claim.show');
    Route::get('/mileage-claim/accept/{id?}', [MileageClaimController::class, 'accept'])->name('mileage-claim.accept');
    Route::get('/mileage-claim/reject/{id?}', [MileageClaimController::class, 'reject'])->name('mileage-claim.reject');
    Route::get('/mileage-claim/delete/{id?}', [MileageClaimController::class, 'destroy'])->name('mileage-claim.destroy');

    // overtime claim
    Route::get('/overtime-claim', [OvertimeClaimController::class, 'index'])->name('overtime-claim.index');
    Route::post('/overtime-claim/{keyword?}', [OvertimeClaimController::class, 'index'])->name('overtime-claim.search');
    Route::get('/overtime-claim/export', [OvertimeClaimController::class, 'exportAsExcel'])->name('overtime-claim.export.excel');
    Route::get('/overtime-claim/create', [OvertimeClaimController::class, 'create'])->name('overtime-claim.create');
    Route::get('/overtime-claim/{id?}', [OvertimeClaimController::class, 'show'])->name('overtime-claim.show');
    Route::get('/overtime-claim/accept/{id?}', [OvertimeClaimController::class, 'accept'])->name('overtime-claim.accept');
    Route::get('/overtime-claim/reject/{id?}', [OvertimeClaimController::class, 'reject'])->name('overtime-claim.reject');
    Route::get('/overtime-claim/delete/{id?}', [OvertimeClaimController::class, 'destroy'])->name('overtime-claim.destroy');

    // leave request
    Route::get('/leave-request', [LeaveRequestController::class, 'index'])->name('leave-request.index');
    Route::post('/leave-request', [LeaveRequestController::class, 'store'])->name('leave-request.store');
    Route::post('/leave-request/{keyword?}', [LeaveRequestController::class, 'index'])->name('leave-request.search');
    Route::get('/leave-request/export', [LeaveRequestController::class, 'exportAsExcel'])->name('leave-request.export.excel');
    Route::get('/leave-request/create', [LeaveRequestController::class, 'create'])->name('leave-request.create');
    Route::get('/leave-request/{id?}', [LeaveRequestController::class, 'show'])->name('leave-request.show');
    Route::get('/leave-request/accept/{id?}', [LeaveRequestController::class, 'accept'])->name('leave-request.accept');
    Route::get('/leave-request/reject/{id?}', [LeaveRequestController::class, 'reject'])->name('leave-request.reject');
    Route::get('/leave-request/delete/{id?}', [LeaveRequestController::class, 'destroy'])->name('leave-request.destroy');

    // student registration
    Route::get('/registration', [StudentRegistrationController::class, 'index'])->name('student-registration.index');
    Route::post('/registration', [StudentRegistrationController::class, 'store'])->name('student-registration.store');
    Route::get('/register-programme', [StudentRegistrationController::class, 'create'])->name('student-registration.create');
    Route::post('/checkout/{id?}', [StudentRegistrationController::class, 'checkout'])->name('student-registration.checkout');
    Route::get('/register-programme/success', [StudentRegistrationController::class, 'success'])->name('success');

    // course
    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::post('/course', [CourseController::class, 'store'])->name('course.store');
    Route::post('/course/{keyword?}', [CourseController::class, 'index'])->name('course.search');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::get('/course/edit/{id?}', [CourseController::class, 'edit'])->name('course.edit');
    Route::patch('/course/update/{id?}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/export', [CourseController::class, 'exportAsExcel'])->name('course.export.excel');
    Route::get('/course/delete/{id?}', [CourseController::class, 'destroy'])->name('course.destroy');

    Route::post('/tmp-upload', [FileUploadController::class, 'tmpUpload']);
    Route::delete('/tmp-delete', [FileUploadController::class, 'tmpDelete']);

});
