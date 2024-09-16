<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\tarefaController;
Route::get('/', function () {
    return view('tarefa
    ');
});

Route::get('/tarefas/create', [tarefaController::class, 'create'])->name('tarefas.create');
Route::post('/tarefas', [tarefaController::class, 'store'])->name('tarefas.store');

