<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\IdiomasController;
use App\Http\Controllers\EmpleadoController;


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

Route::view("auth","auth");
Route::view("n","layouts.navigation")->middleware("auth");

Route::get('/', function () {
    return view('layouts.layout');
});
Route::get("cliente", "App\Http\Controllers\ClienteController@index")->middleware("auth");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource("cliente", ClienteController::class );
Route::resource("factura", FacturaController::class );
Route::resource("idiomas", IdiomasController::class );
Route::resource("empleado", EmpleadoController::class );
