<?php

namespace App\Http\Controllers;
use App\Models\Servicos;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ServicosController extends BaseController
{

    public function mostrarServicos(Request $request)
    {
        $mostrarServicos = Servicos::all();
        return response()->json([
            'servicos' => $mostrarServicos
        ]);
        return response()->json($mostrarServicos);
    }
    public function criarServico(Request $request)
    {
        $servicoCriado = Servicos::create([
            'nome_servico' => $request->nome_servico,
            'valor' => $request->valor,
        ]);
        return response()->json($servicoCriado);
    }
    public function deletarServico(Request $request)
    {
        $servico = Servicos::find($request->id_servico)->delete();
        return response()->json($servico);
    }

    public function atualizarServico(Request $request)
    {
        $servico = Servicos::find($request->id_servico)
            ->update([
                'nome_servico' => $request->nome_servico,
                'valor' => $request->valor,
            ]);
    }

    public function acharServico(Request $request)
    {
        $servico = Servicos::find($request->id_servico);
        return response()->json($servico);
    }

}
/*
https://localhost/Agendamento_sistem/create-servico?nome_servico=aaaaa&valor=aa.aa
  */