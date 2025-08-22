<?php

use App\Http\Controllers\VisitaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contato', [ContactController::class, 'send'])->name('contact.send');

// Rota de recurso para o CRUD da Visita
Route::resource('visitas', VisitaController::class);
