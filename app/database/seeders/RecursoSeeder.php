<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recursos = [
            [
                'recurso' => 'Recurso para passagens',
                'saldo_disponivel' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'recurso' => 'Recurso para hospedagens',
                'saldo_disponivel' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('recursos')->insert($recursos);
    }
}
