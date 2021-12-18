<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PorositeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('porosites')->insert([
                'id_klientit' => '2',
                'id_detajet_e_porosise' => '1',
                'data_e_dergeses' => date("Y-m-d H:i:s"),
                'statusi' => '0',
                'koment' => 'Dergesa behet ne Prishtine',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
