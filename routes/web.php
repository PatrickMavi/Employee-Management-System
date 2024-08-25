<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';



Route::get('/employees', \App\Livewire\Employees\Index::class)->name('employees.index');
Route::get('/employees/create', \App\Livewire\Employees\Create::class)->name('employees.create');
Route::get('/employees/show/{employee}', \App\Livewire\Employees\Show::class)->name('employees.show');
Route::get('/employees/update/{employee}', \App\Livewire\Employees\Edit::class)->name('employees.edit');