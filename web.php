<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GruposController;


Route::get('/mostrarUsuario', [UserController::class, 'mostrarUsuario']);
Route::get('/mostrarServicos', [ServicosController::class, 'mostrarServicos']);


Route::get('/criarUsuario', [UserController::class, 'criarUsuario']);
Route::get('/criarServico', [ServicosController::class, 'criarServico']);
Route::get('/criarGrupo', [GruposController::class, 'criarGrupo']);
Route::get('/criarAgendamento', [AgendamentoController::class, 'criarAgendamento']);
Route::get('/criarAgenda', [AgendaController::class, 'criarAgenda']);



Route::get('deletarUsuario/{id_usuario}', [UserController::class, 'deletarUsuario']);
Route::get('deletarServico/{id_servico}', [ServicosController::class, 'deletarServico']);
Route::get('deletarGrupo/{id_grupo}', [GruposController::class, 'deletarGrupo']);
Route::get('deletarAgendamento/{id_agendamento}', [AgendamentoController::class, 'deletarAgendamento']);
Route::get('deletarAgenda/{id_agenda}', [AgendaController::class, 'deletarAgenda']);


Route::get('atualizarUsuario/{id_usuario}', [UserController::class, 'atualizarUsuario']);
Route::get('atualizarServico/{id_servico}', [ServicosController::class, 'atualizarServico']);
Route::get('atualizarGrupo/{id_grupo}', [GruposController::class, 'atualizarGrupo']);
Route::get('atualizarAgendamento/{id_agendamento}', [AgendamentoController::class, 'atualizarAgendamento']);
Route::get('atualizarAgenda/{id_agenda}', [AgendaController::class, 'atualizarAgenda']);


Route::get('acharUsuario/{id_usuario}', [UserController::class, 'acharUsuario']);
Route::get('acharServico/{id_servico}', [ServicosController::class, 'acharServico']);
Route::get('acharGrupo/{id_grupo}', [GruposController::class, 'acharGrupo']);
Route::get('acharAgendamento/{id_agendamento}', [AgendamentoController::class, 'acharAgendamento']);
Route::get('acharAgenda/{id_agenda}', [AgendaController::class, 'acharAgenda']);

Route::get('calcularIntervalo', [AgendaController::class, 'calcularIntervalo']);

Route::get('prepararAgendamento',[AgendamentoController::class, 'prepararAgendamento']);