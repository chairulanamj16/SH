<?php

use App\Http\Controllers\ObatController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', [ObatController::class, 'index'])->name('obat.index');
Route::get('/obat/{obat:id}', [ObatController::class, 'edit'])->name('obat.edit');
Route::get('/print', [ObatController::class, 'print'])->name('obat.print');
