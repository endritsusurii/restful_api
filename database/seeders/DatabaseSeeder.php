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
        // \App\Models\User::factory(10)->create();
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
