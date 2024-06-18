<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ItensController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlantaController;

Route::get('/', [HomeController::class, 'index']);

// cidades:
Route::get('/cidades', [CidadeController::class, 'index'])->name('cidades.index'); // Para exibir a lista de cidades
Route::post('/cidades', [CidadeController::class, 'store'])->name('cidades.store'); // Para criar uma nova cidade
Route::get('/cidades/{id}', [CidadeController::class, 'show'])->name('cidades.show'); // Para exibir uma cidade específica
Route::put('/cidades/{id}', [CidadeController::class, 'update'])->name('cidades.update'); // Para atualizar uma cidade específica
Route::delete('/cidades/{id}', [CidadeController::class, 'destroy'])->name('cidades.destroy'); // Para excluir uma cidade específica


// clientes:
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');


// funcionários:
Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}', [FuncionarioController::class, 'show'])->name('funcionarios.show');
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');


// itens:
Route::get('/itens', [ItensController::class, 'index'])->name('itens.index');
Route::post('/itens', [ItensController::class, 'store'])->name('itens.store');
Route::get('/itens/{id}', [ItensController::class, 'show'])->name('itens.show');
Route::put('/itens/{id}', [ItensController::class, 'update'])->name('itens.update');
Route::delete('/itens/{id}', [ItensController::class, 'destroy'])->name('itens.destroy');


// pedidos:
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{id}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');


// plantas:
Route::get('/plantas', [PlantaController::class, 'index'])->name('plantas.index');
Route::post('/plantas', [PlantaController::class, 'store'])->name('plantas.store');
Route::get('/plantas/{id}', [PlantaController::class, 'show'])->name('plantas.show');
Route::put('/plantas/{id}', [PlantaController::class, 'update'])->name('plantas.update');
Route::delete('/plantas/{id}', [PlantaController::class, 'destroy'])->name('plantas.destroy');
