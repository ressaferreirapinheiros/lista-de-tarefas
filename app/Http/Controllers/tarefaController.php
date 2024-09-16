<?php
 namespace App\Http\Controllers;
      
      use App\Models\tarefa;
      use Illuminate\Http\Request;
      
      class tarefaController extends Controller
      {
          // Exibe o formulário de criação de tarefa
          public function create()
          {
              return view('tarefas.create');
          }
      
          // Processa e salva a tarefa no banco de dados
          public function store(Request $request)
          {
              // Validação dos campos do formulário
              $request->validate([
                  'name' => 'required|max:255',
                  'description' => 'nullable',
              ]);
      
              // Criação da tarefa
              Tarefa::create([
                  'name' => $request->input('name'),
                  'description' => $request->input('description'),
              ]);
      
              // Redireciona para a lista de tarefas ou outra página
              return redirect()->route('tarefas.create')->with('success', 'Tarefa criada com sucesso!');
          }
      }
      
      
    
    