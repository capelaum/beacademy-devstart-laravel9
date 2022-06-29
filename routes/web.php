<?php

use App\Http\Controllers\{
    UserControler,
    ViaCepController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {
    Route::get('', [UserControler::class, 'index'])->name('users.index');
    Route::get('/create', [UserControler::class, 'create'])->name('users.create');
    Route::post('/save', [UserControler::class, 'save'])->name('users.save');
    Route::get('/{user}', [UserControler::class, 'show'])->name('users.show');
});

Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');
