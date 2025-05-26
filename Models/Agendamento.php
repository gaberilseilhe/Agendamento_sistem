<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $table = 'agendamento';
    protected $primaryKey = 'id_agendamento';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'id_servico',
        'id_agenda',
        'data',
    ];

    public function usuario()
    {
        return $this->hasMany(User::class, 'id_agendamento', 'id_agendamento');
    }

    public function agenda()
    {
        return $this->belongsTo(Agenda::class, 'id_agenda', 'id_agenda');
    }

    public function servico()
    {
        return $this->belongsTo(Servicos::class, 'id_servico', 'id_servico');
    }

}
