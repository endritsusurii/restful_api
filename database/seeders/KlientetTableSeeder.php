<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlientetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('klientets')->insert([
                'emri' => 'Endrit',
                'mbiemri' => 'Susuri',
                'nr_tel' => '+38345621517',
                'adresa' => 'Prizren',
                'qyteti' => 'Prizren',
                'shteti' => 'Kosove',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
