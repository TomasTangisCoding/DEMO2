<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => '可食用',
            'search_key' => 'eadible',
            'order_index' => 1,
            'show_in_list' => true
        ]);

        Brand::create([
            'name' => '可能有毒',
            'search_key' => 'posion',
            'order_index' => 2,
            'show_in_list' => true
        ]);
    }
}
