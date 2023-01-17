<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Criar;
use App\Http\Livewire\Index;
use App\Http\Livewire\Root;
use Illuminate\Support\Facades\Route;



Route::get('/', [Controller::class, 'auth']);


Route::middleware('auth')->group(function () {
    Route::get('index', Index::class)->name('welcome');
    Route::get('/criar', Criar::class)->name('criar');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
