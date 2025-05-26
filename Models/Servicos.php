<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $table = 'servicos';
    protected $primaryKey = 'id_servico';
    public $timestamps = false;

    protected $fillable = [
        "nome_servico",
        "valor",
    ];

    public function servicos()
    {
        return $this->hasMany(Agendamento::class, 'id_servico', 'id_servico');
    }

}