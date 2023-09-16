<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Doctors section
Route::get('/add_doctor_view', [AdminController::class, 'addview'])->name('admin.doctor');
Route::post('/upload_doctor', [AdminController::class, 'upload'])->name('admin.upload');
Route::post('/appointment', [HomeController::class, 'appointment'])->name('user.appointment');

Route::get('/myappointment', [HomeController::class, 'myappointment'])->name('user.myappointment');
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint'])->name('user.cancel_appoint');

Route::get('/showappointment', [AdminController::class, 'showappointment'])->name('admin.showappointment');

Route::get('/approved/{id}', [AdminController::class, 'approved'])->name('admin.approved');
Route::get('/canceled/{id}', [AdminController::class, 'canceled'])->name('admin.canceled');

Route::get('/showdoctor', [AdminController::class, 'showdoctor'])->name('admin.showdoctor');

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor'])->name('admin.deletedoctor');