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
            BrandSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ProductOptionSeeder::class,
        ]);
    }
}
