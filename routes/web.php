<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('curso', [CursoController::class, "index"]);

Route::get('curso/create', [CursoController::class, "create"]);

Route::get('curso/{curso}', [CursoController::class, "show"]);
