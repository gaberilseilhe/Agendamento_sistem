<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agendas';
    protected $primaryKey = 'id_agenda';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'dia_da_semana',
        'horario',
    ];

    public function agendamento()
    {
        return $this->hasMany(Agendamento::class, 'id_agenda', 'id_agendas');
    }

}
