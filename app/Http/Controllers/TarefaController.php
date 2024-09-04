<?php

namespace App\Http\Controllers;

use App\Service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller

{
    protected $tarefaService;

    public function __construct (TarefaService $novoTarefaSevice)
    {
        $this->tarefaService = $novoTarefaSevice;

    }

    public function store (Request $request){
        $result = $this->tarefaService->create($request->all());

        return response()->json ($result);
    }

    public function index (){}

    public function show($id){}

}
