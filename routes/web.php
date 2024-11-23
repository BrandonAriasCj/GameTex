<?php

use App\Http\Controllers\index;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashController;
use App\Http\Controllers\ModerDashController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TorneosController;

#Route::get('/', function () {
    #return view('welcome');
#});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('home.index');
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

#Route::get('/login', [LoginController::class, 'showLoginForm'])
    #->name('login.show');
Route::post('/login', [LoginController::class, 'login'])
    ->name('login.attempt');
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])
    ->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Rutas protegidas para usuarios
Route::middleware(['auth.users'])->group(function () {
    Route::get('dashboard', [UserDashController::class, 'index']);

        // Ruta principal del panel
    Route::prefix('panel')->group(function () {
        // Ruta principal: /panel
        Route::get('/', [JugadorController::class, 'index'])->name('panel.index');
        
        // Subruta: /panel/descripcion
        Route::get('/descripcion',[JugadorController::class , 'descripcion'])->name('panel.descripcion');
        
        // Subruta: /panel/partidas
        Route::get('/partidas', [JugadorController::class, 'partidas'])->name('panel.partidas');
        
        // Subruta: /panel/ranquin
        Route::get('/ranking', [JugadorController::class, 'ranking'])->name('panel.ranking');
        
        // Subruta: /panel/reglas
        Route::get('/reglas', [JugadorController::class, 'reglas'])->name('panel.reglas');
    });

});


// Rutas protegidas para administradores
Route::middleware(['auth.admin'])->group(function () {
    //////////////////////////////////////////////////////////////////////
    ///////////////  Rutas Eventos ///////////////////
    Route::get('/admin/dashboard', [AdminDashController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/dinamicas/eventos', [AdminDashController::class, 'eventos'])->name('admin.dinamicas.eventos');
    Route::post('/admin/dinamicas/eventos', [AdminDashController::class, 'storeEventos'])->name('admin.dinamicas.store');
    Route::get('/admin/dinamicas/eventos-show/{id}', [AdminDashController::class, 'showEventos'])->name('admin.dinamicas.show');
    Route::delete('/admin/dinamicas/eventos/{id}', [AdminDashController::class, 'deleteEventos'])->name('admin.dinamicas.delete');
    Route::get('/admin/dinamicas/eventos-edit/{id}/edit', [AdminDashController::class, 'editEventos'])->name('admin.dinamicas.eventos-edit');

    Route::put('/admin/dinamicas/eventos/{id}', [AdminDashController::class, 'updateEventos'])->name('admin.dinamicas.update');
    //////////////////////////////////////////////////////////////////////
    ///////////////  Rutas Torneos ///////////////////
    Route::get('/admin/dinamicas/torneos', [AdminDashController::class, 'torneos'])->name('admin.dinamicas.torneos');
    Route::get('/admin/dinamicas/torneos-show/{id}', [AdminDashController::class, 'showTorneos'])->name('admin.dinamicas.showTorneos');
    Route::post('/admin/dinamicas/torneos', [AdminDashController::class, 'storeTorneos'])->name('admin.dinamicas.storeTorneos');
    Route::get('/admin/dinamicas/torneos-edit/{id}/edit', [AdminDashController::class, 'editTorneos'])->name('admin.dinamicas.torneos-edit');
    Route::put('/admin/dinamicas/torneos/{id}', [AdminDashController::class, 'updateTorneos'])->name('admin.dinamicas.updateTorneos');
    Route::delete('/admin/dinamicas/torneos/{id}', [AdminDashController::class, 'destroyTorneos'])->name('admin.dinamicas.destroyTorneos');
    
    /////////////////////////////////////////////////////////////////////
    ///////////////  Rutas Recompensas ///////////////////
    Route::get('/admin/dinamicas/recompensas', [AdminDashController::class, 'recompensas'])->name('admin.dinamicas.recompensas');
    Route::post('/admin/dinamicas/recompensas', [AdminDashController::class, 'storeRecompensas'])->name('admin.dinamicas.storeRecompensas');
    Route::get('/admin/dinamicas/recompensas-edit/{id}/edit', [AdminDashController::class, 'editRecompensas'])->name('admin.dinamicas.recompensas-edit');
    Route::put('/admin/dinamicas/recompensas/{id}', [AdminDashController::class, 'updateRecompensas'])->name('admin.dinamicas.updateRecompensas');
    Route::delete('/admin/dinamicas/recompensas/{id}', [AdminDashController::class, 'destroyRecompensas'])->name('admin.dinamicas.destroyRecompensas');
    /////////////////////////////////////////////////////////////////////
    ///////////////  Rutas por definir ///////////////////

    /////////////////////////////////////////////////////////////////////
    ///////////////  Rutas noticias ///////////////////
    Route::get('/admin/gestion/noticias', [AdminDashController::class, 'noticias'])->name('admin.gestion.noticias');
    Route::get('/admin/gestion/noticiasShow/{id}', [AdminDashController::class, 'showNoticia'])->name('admin.gestion.noticiasShow');
        
    Route::post('/admin/gestion/noticias', [AdminDashController::class, 'storeNoticias'])->name('admin.gestion.storeNoticias');
    Route::get('/admin/gestion/noticias-edit/{id}/edit', [AdminDashController::class, 'editNoticias'])->name('admin.gestion.noticias-edit');
    Route::put('/admin/gestion/noticias/{id}', [AdminDashController::class, 'updateNoticias'])->name('admin.gestion.updateNoticias');
    Route::delete('/admin/gestion/noticias/{id}', [AdminDashController::class, 'destroyNoticias'])->name('admin.gestion.destroyNoticias');

    /////////////////////////////////////////////////////////////////////
});


Route::middleware(['auth.moderator'])->group(function () {

    Route::get('/moder/dashboard', [ModerDashController::class, 'index'])
        ->name('moder.dashboard');
        // Rutas protegidas para moderadores
});


#Torneos:
Route::get('torneos', [TorneosController::class, 'index'])->name('torneos.index');

#Noticias:
Route::get('noticias', function () {
    return view('noticias.index');
});

Route::get('articulo1', function () {
    return view('noticias.articulos.art1');
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
Route::get('f_metodos_pago', function () {
    return view('footer.acerca.metodos_pago');
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


Route::get('modalPar', function () {
    return view('components.modalParticipar');
});



