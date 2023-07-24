<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('layouts.dashboard');
// });

// Login and registration routes
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'userlogin'])->name('userlogin');

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register/user',[AuthController::class, 'userregister'])->name('userregister');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');


//students route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/students',[StudentController::class, 'index'])->name('studentsindex');
    Route::get('/student/add',[StudentController::class, 'create'])->name('studentcreate');
    Route::post('/student/store',[StudentController::class, 'store'])->name('studentstore');
    Route::get('/student/show/{id}',[StudentController::class, 'show'])->name('studentshow');
    Route::get('/student/edit/{id}',[StudentController::class, 'edit'])->name('studentedit');
    Route::post('/student/update/{id}',[StudentController::class, 'update'])->name('studentupdate');
    Route::get('/student/delete/{id}',[StudentController::class, 'destroy'])->name('studentdelete');
});
// teachers route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/teachers',[TeacherController::class, 'index'])->name('teachersindex');
    Route::get('/teacher/add',[TeacherController::class, 'create'])->name('teachercreate');
    Route::post('/teacher/store',[TeacherController::class, 'store'])->name('teacherstore');
    Route::get('/teacher/show/{id}',[TeacherController::class, 'show'])->name('teachershow');
    Route::get('/teacher/edit/{id}',[TeacherController::class, 'edit'])->name('teacheredit');
    Route::post('/teacher/update/{id}',[TeacherController::class, 'update'])->name('teacherupdate');
    Route::get('/teacher/delete/{id}',[TeacherController::class, 'destroy'])->name('teacherdelete');
});
//course route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/courses',[CourseController::class, 'index'])->name('coursesindex');
    Route::get('/course/add',[CourseController::class, 'create'])->name('coursecreate');
    Route::post('/course/store',[CourseController::class, 'store'])->name('coursestore');
    Route::get('/course/show/{id}',[CourseController::class, 'show'])->name('courseshow');
    Route::get('/course/edit/{id}',[CourseController::class, 'edit'])->name('courseedit');
    Route::post('/course/update/{id}',[CourseController::class, 'update'])->name('courseupdate');
    Route::get('/course/delete/{id}',[CourseController::class, 'destroy'])->name('coursedelete');
});
// Batches route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/batches',[BatchController::class, 'index'])->name('batchesindex');
    Route::get('/batch/add',[BatchController::class, 'create'])->name('batchcreate');
    Route::post('/batch/store',[BatchController::class, 'store'])->name('batchstore');
    Route::get('/batch/show/{id}',[BatchController::class, 'show'])->name('batchshow');
    Route::get('/batch/edit/{id}',[BatchController::class, 'edit'])->name('batchedit');
    Route::post('/batch/update/{id}',[BatchController::class, 'update'])->name('batchupdate');
    Route::get('/batch/delete/{id}',[BatchController::class, 'destroy'])->name('batchdelete');
});
//Enrollment route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/enrollments',[EnrollmentController::class, 'index'])->name('enrollmentsindex');
    Route::get('/enrollment/add',[EnrollmentController::class, 'create'])->name('enrollmentcreate');
    Route::post('/enrollment/store',[EnrollmentController::class, 'store'])->name('enrollmentstore');
    Route::get('/enrollment/show/{id}',[EnrollmentController::class, 'show'])->name('enrollmentshow');
    Route::get('/enrollment/edit/{id}',[EnrollmentController::class, 'edit'])->name('enrollmentedit');
    Route::post('/enrollment/update/{id}',[EnrollmentController::class, 'update'])->name('enrollmentupdate');
    Route::get('/enrollment/delete/{id}',[EnrollmentController::class, 'destroy'])->name('enrollmentdelete');
});
// Payments route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/payments',[PaymentController::class, 'index'])->name('paymentsindex');
    Route::get('/payment/add',[PaymentController::class, 'create'])->name('paymentcreate');
    Route::post('/payment/store',[PaymentController::class, 'store'])->name('paymentstore');
    Route::get('/payment/show/{id}',[PaymentController::class, 'show'])->name('paymentshow');
    Route::get('/payment/edit/{id}',[PaymentController::class, 'edit'])->name('paymentedit');
    Route::post('/payment/update/{id}',[PaymentController::class, 'update'])->name('paymentupdate');
    Route::get('/payment/delete/{id}',[PaymentController::class, 'destroy'])->name('paymentdelete');
});


//Profile route
Route::group(['middleware'=>'auth'],function(){
    Route::get('/profile',[AuthController::class, 'profile'])->name('profile');
    Route::get('/profile/settings',[AuthController::class, 'settings'])->name('settings');
    Route::post('/profile/update',[AuthController::class, 'update'])->name('profileupdate');

});