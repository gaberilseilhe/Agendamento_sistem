<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User; // model do usuario
use Illuminate\Http\Request;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function mostrarUsuario(Request $request)
    {

        $mostrarUsuario = User::all();
        return response()->json([
            'usuarios' => $mostrarUsuario
        ]);
    }

    public function criarUsuario(Request $request)
    {

        $usuarioCriado = User::create([
            'nome_usuario' => $request->nome_usuario,
            'id_grupo' => $request->id_grupo,
            'data_nascimento' => $request->data_nascimento,
        ]);
    }

    public function deletarUsuario(Request $request)
    {
        $usuario = User::find($request->id_usuario)->delete();

    }

    public function atualizarUsuario(Request $request)
    {
        $usuario = User::find($request->id_usuario)
            ->update([
                'nome_usuario' => $request->nome_usuario,
                'id_grupo' => $request->id_grupo,
                'data_nascimento' => $request->data_nascimento,
            ]);
    }

    public function acharUsuario(Request $request)
    {
        $usuario = User::find($request->id_usuario);
        return response()->json($usuario);
    }

}



/*
https://localhost/Agendamento_sistem/create-usuario?nome_usuario=gabe&id_grupo=1&data_nascimento=2004-12-12
  */