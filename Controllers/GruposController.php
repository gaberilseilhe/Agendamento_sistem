<?php

namespace App\Http\Controllers;

use App\Models\Grupos;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class GruposController extends BaseController
{
    public function criarGrupo(Request $request)
    {
        $grupoCriado = Grupos::create([
            'nome_grupo' => $request->nome_grupo,
            'valor' => $request->valor,
        ]);
        return response()->json($grupoCriado);
    }
    public function deletarGrupo(Request $request)
    {
        $grupo = Grupos::find($request->id_grupo)->delete();
        return response()->json($grupo);
    }

    public function atualizarGrupo(Request $request)
    {
        $grupo = Grupos::find($request->id_grupo)
            ->update([
                'nome_grupo' => $request->nome_grupo,
            ]);
    }

    public function acharGrupo(Request $request)
    {
        $grupo = Grupos::find($request->id_grupo);
        return response()->json($grupo);
    }
}

/*
https://localhost/Agendamento_sistem/create-grupo?nome_grupo=Admin
  */