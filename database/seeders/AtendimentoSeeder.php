<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtendimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_atendimento')->insert([
            [
                'id' => 1,
                'pet_id' => '1',
                'data_atendimento' => '2020-10-01',
                'descricao' => 'recebeu dose de 100mg de coragem'
            ],
            [
                'id' => 2,
                'pet_id' => '2',
                'data_atendimento' => '2020-10-02',
                'descricao' => 'recebeu dose de 10mg coragem'
            ],
            [
                'id' => 3,
                'pet_id' => '3',
                'data_atendimento' => '2020-10-03',
                'descricao' => 'recebeu dose de 10mg de força'
            ],
            [
                'id' => 4,
                'pet_id' => '4',
                'data_atendimento' => '2020-10-04',
                'descricao' => null
            ]
        ]);
    }
}
