<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AgendaController extends BaseController
{
    public function criarAgenda(Request $request)
    {
        $agendaCriado = Agenda::create([
            'id_usuario' => $request->id_usuario,
            'dia_da_semana' => $request->dia_da_semana,
            'id_agenda' => $request->id_agenda,
            'horario' => $request->horario,
        ]);
        return response()->json($agendaCriado);
    }
    public function deletarAgenda(Request $request)
    {
        $agenda = Agenda::find($request->id_agenda)->delete();
        return response()->json($agenda);
    }

    public function atualizarAgenda(Request $request)
    {
        $agenda = Agenda::find($request->id_agenda)
            ->update([
                'id_usuario' => $request->id_usuario,
                'dia_da_semana' => $request->dia_da_semana,
                'id_agenda' => $request->id_agenda,
                'horario' => $request->horario,
            ]);
    }

    public function acharAgenda(Request $request)
    {
        $agenda = Agenda::find($request->id_agenda);
        return response()->json($agenda);
    }
    public function calculoIntervalo(Request $request){
        $inicio = strtotime($request -> horario_inicio);
        $final = strtotime($request -> horario_final);
        $intervalo = ($final - $inicio) / 60/30;

        for ($i=0; $i<$intervalo; $i++){
            echo "\n".date("H:i", $inicio);
            $inicio += 30 * 60;
        Agenda::create([
    'hora' => $request -> hora,
    'id_profissional' => $request -> id_profissional,
    'dia_da_semana' => $request -> dia_da_semana

]);
        }

    }
}

/*
https://localhost/Agenda_sistem/create-agenda?id_usuario=1&dia_da_semana=1000-10-10&horario=12:00
*/
