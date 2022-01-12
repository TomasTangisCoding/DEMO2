<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => '杏鮑菇',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Pleurotus_eryngii.jpg/220px-Pleurotus_eryngii.jpg',
            'description' => '可食用',
            'brand_id' => '1',
            'subcategory_id' => '1',
            'published_status' => 1,
        ]);
       
    }
}
