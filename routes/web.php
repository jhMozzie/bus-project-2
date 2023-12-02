<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\CheckUserType;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'check_user_type:1'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'StudentDashboard'])->name('student.dashboard');
});

Route::middleware(['auth', 'check_user_type:2'])->group(function () {
    Route::get('/professor/dashboard', [ProfessorController::class, 'ProfessorDashboard'])->name('professor.dashboard');
});

Route::middleware(['auth', 'check_user_type:3'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/users/index', [AdminController::class, 'index'])->name('admin.users.index');
    // Controlador Buses
    Route::prefix('admin')->group(function () {
        Route::get('/buses/index', [BusController::class, 'index'])->name('admin.buses.index');
        Route::get('/buses/create', [BusController::class, 'create'])->name('admin.buses.create');
        Route::get('/buses/{bus}', [BusController::class, 'show'])->name('admin.buses.show');
        Route::post('admin/buses', [BusController::class, 'store'])->name('admin.buses.store');
        Route::get('/buses/{bus}/edit', [BusController::class, 'edit'])->name('admin.buses.edit');
        Route::put('/admin/buses/{bus}', [BusController::class, 'update'])->name('admin.buses.update');
        Route::delete('/buses/{bus}', [BusController::class, 'destroy'])->name('admin.buses.destroy');


    });
    // Route::get('/admin/buses/index', [BusController::class, 'index'])->name('admin.buses.index');
});

require __DIR__ . '/auth.php';
