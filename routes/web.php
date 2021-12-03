<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
//TABLAS
use App\Http\Controllers\ConductoreController;
use App\Http\Controllers\GrifoController;
use App\Http\Controllers\PlantaController;
use App\Http\Controllers\TipocombustibleController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ValescombustibleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('valescombustibles/pdf', [App\Http\Controllers\ValescombustibleController::class, 'pdf'])->name('valescombustibles.pdf');
   


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\ValescombustibleController::class, 'all']);

//RUTAS DE LOS CRUDS
Route::resource('conductores', App\Http\Controllers\ConductoreController::class)->middleware('auth');
Route::resource('grifos', App\Http\Controllers\GrifoController::class)->middleware('auth');
Route::resource('plantas', App\Http\Controllers\PlantaController::class)->middleware('auth');
Route::resource('tipocombustibles', App\Http\Controllers\TipocombustibleController::class)->middleware('auth');
Route::resource('viajes', App\Http\Controllers\ViajeController::class)->middleware('auth');
Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class)->middleware('auth');
Route::resource('valescombustibles', App\Http\Controllers\ValescombustibleController::class)->middleware('auth');


//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);

    
    Route::resource('conductores', ConductoreController::class);
    Route::resource('grifos', GrifoController::class);
    Route::resource('plantas', PlantaController::class);
    Route::resource('tipocombustibles', TipocombustibleController::class);
    Route::resource('viajes', ViajeController::class);
    Route::resource('valescombustibles', ValescombustibleController::class);
    Route::resource('vehiculos', VehiculoController::class);
}); 

