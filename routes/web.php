<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('home');

// Public Pages
Route::get('/charter', [\App\Http\Controllers\MainController::class, 'charter'])->name('charter');
Route::get('/fleet', [\App\Http\Controllers\MainController::class, 'fleet'])->name('fleet');
Route::get('/fleet/{fleet}', [\App\Http\Controllers\MainController::class, 'fleetDetail'])->name('fleet.detail');
Route::get('/services', [\App\Http\Controllers\MainController::class, 'services'])->name('service');
Route::get('/services/{service}', [\App\Http\Controllers\MainController::class, 'serviceDetail'])->name('service.detail');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/quote', [\App\Http\Controllers\MainController::class, 'quote'])->name('quote');

Route::get('/dashboard', \App\Livewire\Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    // Administrator Routes
    Route::middleware(['role:Super Admin'])->prefix('administrator')->name('admin.')->group(function () {
        Route::get('/users', \App\Livewire\Administrator\ManageUsers::class)->name('users');
        Route::get('/roles', \App\Livewire\Administrator\ManageRoles::class)->name('roles');
    });

    Route::get('/heroes', \App\Livewire\ManageHeroes::class)->name('heroes');
    Route::get('/services', \App\Livewire\ManageServices::class)->name('services');
    Route::get('/fleets', \App\Livewire\ManageFleets::class)->name('fleets');
    Route::get('/page-seo', \App\Livewire\PageSEO::class)->name('page-seo');

    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
