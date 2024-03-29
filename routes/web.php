<?php

use App\Livewire\Tasks\TaskIndex;
use App\Livewire\ImageIndex;
use App\Livewire\Tasks\Tasks;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::view('tasks', 'livewire.tasks.tasks')
//     ->middleware(['auth'])
//     ->name('tasks.index');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('tasks' ,TaskIndex::class)
    ->middleware(['auth'])
    ->name('tasks.index'); 

Route::get('images' , ImageIndex::class)
    ->middleware(['auth'])
    ->name('images.index'); 

require __DIR__.'/auth.php';
