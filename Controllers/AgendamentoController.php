<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AgendamentoController extends BaseController
{
    public function criarAgendamento(Request $request)
    {
        $agendamentoCriado = Agendamento::create([
            'id_usuario' => $request->id_usuario,
            'id_servico' => $request->id_servico,
            'id_agenda' => $request->id_agenda,
            'data' => $request->data,
        ]);
        return response()->json($agendamentoCriado);
    }
    public function deletarAgendamento(Request $request)
    {
        $agendamento = Agendamento::find($request->id_agendamento)->delete();
        return response()->json($agendamento);
    }

    public function atualizarAgendamento(Request $request)
    {
        $agendamento = Agendamento::find($request->id_agendamento)
            ->update([
                'id_usuario' => $request->id_usuario,
                'id_servico' => $request->id_servico,
                'id_agenda' => $request->id_agenda,
                'data' => $request->data
            ]);
    }

    public function acharAgendamento(Request $request)
    {
        $agendamento = Agendamento::find($request->id_agendamento);
        return response()->json($agendamento);
    }

    public function prepararAgendamento(Request $request){
        $dia_da_semana = data('w', strototime($request -> data));

        $horariosLivres = Agenda::
        where('dia_da_semana', $dia_da_semana)
        ->whereDoenstHave('agendamentos')
        ->with('usuarios')
        ->get();
    }
}
/*
https://localhost/Agendamento_sistem/create-agendamento?id_usuario=1&id_servico=1&id_agenda=1&data=1200-12-23
*/