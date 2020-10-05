<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetModel extends Model
{
    protected $table = "tb_pet";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'nome',
        'especie'
    ];
}
