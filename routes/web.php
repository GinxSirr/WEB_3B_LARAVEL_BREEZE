<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\MainAdminControoler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->check() && auth()->user()->role === 'Admin') {
        return redirect()->route('admin.dashboard');
    } else if (auth()->check() && auth()->user()->role === 'User') {
        return view('UserPages.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// admin routes
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [MainAdminControoler::class, 'index'])->name('dashboard');

    Route::get('/about', [MainAdminControoler::class, 'about'])->name('about');

    Route::get('/organizations', [MainAdminControoler::class, 'organizations'])->name('organizations');
    
    Route::get('/organizations/{id}/edit', [MainAdminControoler::class, 'editOrganization'])->name('organizations.edit');
    Route::put('/organizations/{id}', [MainAdminControoler::class, 'updateOrganization'])->name('organizations.update');

});

require __DIR__ . '/auth.php';
