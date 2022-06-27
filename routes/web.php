<?php

use App\Http\Controllers\UserControler;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {
    Route::get('', [UserControler::class, 'index'])->name('users.index');

    Route::get('/{user}', [UserControler::class, 'show'])->name('users.show');
});
