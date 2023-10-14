<?php

use App\Http\Controllers\ExamenesController;
use Illuminate\Support\Facades\Route;

Route::controller(ExamenesController::class)->prefix('examenes')->group(function () {
    Route::get('/', 'listar');
    Route::get('/{discord_id}', 'obtener');
    Route::post('/', 'crear');
    Route::delete('/{discord_id}', 'eliminar');
});
