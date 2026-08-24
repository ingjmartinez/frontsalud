<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.enviar');
