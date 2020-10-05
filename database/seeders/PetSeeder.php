<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_pet')->insert([
            [
                'id' => 1,
                'nome' => 'Coragem',
                'especie' => 'C'
            ],
            [
                'id' => 2,
                'nome' => 'Scooby Doo',
                'especie' => 'C'
            ],
            [
                'id' => 3,
                'nome' => 'Mew',
                'especie' => 'G'
            ],
            [
                'id' => 4,
                'nome' => 'Mewtwo',
                'especie' => 'G'
            ]
        ]);
    }
}
