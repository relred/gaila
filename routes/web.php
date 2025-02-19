<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/dashboard', fn () =>
    auth()->user() 
        ? redirect()->route('menu.index')
        : redirect()->route('login')
)->name('dashboard');

Route::resource('menu', MenuController::class)->middleware('auth');
Route::get('/menu/{menu}/add-category', [MenuController::class, 'addCategory'])->name('menu.category.add')->middleware('auth');
Route::post('/menu/{menu}/add-category', [MenuController::class, 'storeCategory'])->name('menu.category.store')->middleware('auth');

Route::resource('category', CategoryController::class)->middleware('auth');
Route::get('/category/{category}/add-item', [CategoryController::class, 'addItem'])->name('category.item.add')->middleware('auth');
Route::post('/category/{category}/add-item', [CategoryController::class, 'storeItem'])->name('category.item.store')->middleware('auth');

Route::get('/m/{menu}', [MenuController::class, 'publicView'])->name('public.menu.view');

Route::resource('item', ItemController::class);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
