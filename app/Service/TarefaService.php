<?php

namespace App\Service;

use App\Models\Tarefa;

class TarefaService
{
    public function create (array $dados){
        $tarefa = Tarefa::create([
        'titulo' => $dados ['titulo'],
        'descricao' => $dados ['descricao']
    ]);
        
        
    }
    //insert into `tarefas` (`titulo`, `descricao`, `updated_at`, `created_at`) values (Comandos, Documentar comando em formato pdf, 2024-09-04 18:05:27, 2024-09-04 18:05:27)
    /* if ($tarefa == null){
        return [
            'status' => false,
            'message' => "Cadê a Tarefa?"
        ];
     } */
}