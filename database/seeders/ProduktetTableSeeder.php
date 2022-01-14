<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduktetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('produktets')->insert([
                'id_detajet_e_produkteve' => '1',
                'emri_produktit' => 'Maus Razer DeathAdder Essential (2021), i zi',
                'pershkrimi_i_produktit' => 'Mausi i lojërave Razer DeathAdder Essential.',
                'sasia_ne_stok' => '10',
                'cmimi' => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
