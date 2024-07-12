<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', [Test::class, 'index'])->name('student.index');
// // Route::post('/students-submit', [StudentController::class, 'student_details'])->name('students.submit');
// Route::post('/student-update-form/{id}', [StudentController::class, 'updateForm'])->name('students.update.form');

Route::get('/student-form', function () {
    return view('students');
})->name('student.form');
Route::get('/student-list', [StudentController::class, 'list'])->name('students.list');
Route::post('/students-save', [StudentController::class, 'save'])->name('students.save');
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->name('students.delete');
Route::get('/student-update-form/{id}', [StudentController::class, 'updateForm'])->name('students.update.form');
Route::post('/student-update/{id}', [StudentController::class, 'update'])->name('students.update');


