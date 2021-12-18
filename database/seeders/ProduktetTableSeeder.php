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
                'pershkrimi_i_produktit' => 'Mausi i lojërave Razer DeathAdder Essential është krijuar për dorën e djathtë. Ka një sensor me një ndjeshmëri deri në 6400 DPI. Sensori trajton nxitimin deri në 30 G, shpejtësinë 220 inç në sekondë dhe koha e përgjigjes është 1000Hz / 1ms. Ka gjithsej 5 butona të programueshëm. Mausi është i lidhur me kabllo, i krijuar për USB dhe lidhësi i tij është i veshur me ar.',
                'sasia_ne_stok' => '10',
                'cmimi' => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
