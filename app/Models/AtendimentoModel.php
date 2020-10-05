<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AtendimentoModel extends Model
{
    protected $table = "tb_atendimento";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'pet_id',
        'data_atendimento',
        'descricao'
    ];
}
