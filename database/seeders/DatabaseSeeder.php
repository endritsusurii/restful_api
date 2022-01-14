<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KlientetTableSeeder::class,
            PagesatTableSeeder::class,
            Detajet_e_produkteveTableSeeder::class,
            ProduktetTableSeeder::class,
            Detajet_e_porosiseTableSeeder::class,
            PorositeTableSeeder::class,
        ]);
    }
}
