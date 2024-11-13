<?php

use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
    #return view('welcome');
#});

Route::get('/', function () {
    return view('/home/index');
});

Route::get('nosotros', function () {
    return view('/footer/terminos/politicas_reembolso');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/dashboard');
    })->name('dashboard');
});


Route::get('tienda', function () {
    return view('tienda/index');
});

Route::get('torneos', function () {
    return view('torneos/index');
});


#Rooter - FOOTER:
#Acerca:
Route::get('f_nosotros', function () {
    return view('footer.acerca.nosotros');
});
Route::get('f_tienda', function () {
    return view('footer.acerca.tienda');
});
Route::get('f_torneos', function () {
    return view('footer.acerca.torneos');
});
Route::get('f_eventos', function () {
    return view('footer.acerca.eventos');
});
Route::get('f_categorias', function () {
    return view('footer.acerca.categorias');
});
#Términos:
Route::get('f_poli_privacidad', function () {
    return view('footer.terminos.politicas_privacidad');
});
Route::get('f_termin_condiciones', function () {
    return view('footer.terminos.terminos_condiciones');
});
Route::get('f_poli_reembolsos', function () {
    return view('footer.terminos.politicas_reembolso');
});
Route::get('f_poli_cookies', function () {
    return view('footer.terminos.politicas_cookies');
});
