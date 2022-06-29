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

    Route::get('/edit/{id}', [UserControler::class, 'edit'])->name('users.edit');
    Route::put('/update/{id}', [UserControler::class, 'update'])->name('users.update');

    Route::delete('/delete/{id}', [UserControler::class, 'delete'])->name('users.delete');

    Route::get('/{id}', [UserControler::class, 'show'])->name('users.show');
});

Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');
