<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashController;
use App\Http\Controllers\ModerDashController;
#Route::get('/', function () {
    #return view('welcome');
#});


// Aplica los middlewares de autenticación de Jetstream a un grupo de rutas
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('/home/index');
});

Route::get('nosotros', function () {
    return view('/footer/terminos/politicas_reembolso');
});

Route::get('tienda', function () {
    return view('/tienda/index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]);
/////////////////////

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login.show');
Route::post('/login', [LoginController::class, 'login'])
    ->name('login.attempt');
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

// Rutas protegidas para administradores
Route::middleware(['auth.admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashController::class, 'index'])
        ->name('admin.dashboard');
        Route::post('/admin/dashboard/store', [AdminDashController::class, 'store'])->name('admin.dashboard.store');
});


Route::middleware(['auth.moderator'])->group(function () {

    Route::get('/moder/dashboard', [ModerDashController::class, 'index'])
        ->name('moder.dashboard');
        // Rutas protegidas para moderadores
});


//////////////////////

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
