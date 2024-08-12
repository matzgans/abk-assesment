<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.welcome');
});

Route::middleware(['auth', 'role:admin'])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/admin', function () {
        return view('pages.admin.dashboard');
    })->name('admin');
});
Route::middleware(['auth', 'role:headmaster'])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/headmaster', function () {
        return view('pages.headmaster.dashboard');
    })->name('headmaster');
});
Route::middleware(['auth', 'role:teacher'])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/teacher', function () {
        return view('pages.teacher.dashboard');
    })->name('teacher');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
