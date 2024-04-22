<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "view Hola mundo";
});
Route::get('curso', function () {
    return "Bienvenidos a la pagina de cursos";
});

Route::get('curso/create', function () {
    return "En esta pagina podras crear cursos";
});

Route::get('curso/{curso}', function ($curso) {
    return "Bienvenidos al curso: $curso";
});

Route::get('curso/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenidos al de cursos $curso , del acategoria $categoria)";
});