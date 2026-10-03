<?php

use App\Models\Personaje;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $personajes = Personaje::all();

    $estadisticas = [
        'total' => $personajes->count(),
        'vivos' => $personajes->where('vivo', true)->count(),
        'caidos' => $personajes->where('vivo', false)->count(),
        'titanes' => $personajes->filter(fn ($p) => $p->es_titan)->count(),
    ];

    return view('personajes', compact('personajes', 'estadisticas'));
});

Route::get('/personajes', function () {
    return redirect('/');
});
