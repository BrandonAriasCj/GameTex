<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashController;
use App\Http\Controllers\ModerDashController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\RegisterController;


#Route::get('/', function () {
    #return view('welcome');
#});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('/home/index');
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
    Route::get('dashboard', [UserDashController::class, 'index'])->name('dashboard');

});

// Rutas protegidas para administradores
Route::middleware(['auth.admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/dinamicas/eventos', [AdminDashController::class, 'eventos'])->name('admin.dinamicas.eventos');
    Route::post('/admin/dinamicas/eventos', [AdminDashController::class, 'storeEventos'])->name('admin.dinamicas.store');
    Route::get('/admin/dinamicas/eventos/{id}', [AdminDashController::class, 'showEventos'])->name('admin.dinamicas.show');
    Route::delete('/admin/dinamicas/eventos/{id}', [AdminDashController::class, 'deleteEventos'])->name('admin.dinamicas.delete');
    Route::get('/admin/dinamicas/eventos-edit/{id}/edit', [AdminDashController::class, 'editEventos'])->name('admin.dinamicas.eventos-edit');

    Route::put('/admin/dinamicas/eventos/{id}', [AdminDashController::class, 'updateEventos'])->name('admin.dinamicas.update');
    //////////////////////////////////////////////////////////////////////

    Route::get('/admin/dinamicas/torneos', [AdminDashController::class, 'torneos'])->name('admin.dinamicas.torneos');
    Route::get('/admin/dinamicas/torneos/{id}', [AdminDashController::class, 'showTorneo'])->name('admin.dinamicas.showTorneo');
    Route::post('/admin/dinamicas/torneos', [AdminDashController::class, 'storeTorneos'])->name('admin.dinamicas.storeTorneos');
    Route::get('/admin/dinamicas/torneos-edit/{id}/edit', [AdminDashController::class, 'editTorneos'])->name('admin.dinamicas.torneos-edit');
    Route::put('/admin/dinamicas/torneos/{id}', [AdminDashController::class, 'updateTorneos'])->name('admin.dinamicas.updateTorneos');
    Route::delete('/admin/dinamicas/torneos/{id}', [AdminDashController::class, 'destroyTorneos'])->name('admin.dinamicas.destroyTorneos');
    
    /////////////////////////////////////////////////////////////////////
    Route::get('/admin/dinamicas/recompensas',[AdminDashController::class,'recompensas'])->name('admin.dinamicas.recompensas');


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




// Ruta principal del panel
Route::prefix('panel')->group(function () {
    // Ruta principal: /panel
    Route::get('/', function () {
        return view('jugador/index');
    })->name('panel.index');
    
    // Subruta: /panel/descripcion
    Route::get('/descripcion', function () {
        return view('jugador/descripcion');
    })->name('panel.descripcion');
    
    // Subruta: /panel/partidas
    Route::get('/partidas', function () {
        return view('jugador/partidas');
    })->name('panel.partidas');
    
    // Subruta: /panel/ranquin
    Route::get('/ranking', function () {
        return view('jugador/ranking');
    })->name('panel.ranking');
    
    // Subruta: /panel/reglas
    Route::get('/reglas', function () {
        return view('jugador/reglas');
    })->name('panel.reglas');
});
