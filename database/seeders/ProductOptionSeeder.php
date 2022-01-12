<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductOption;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOption::create([
            'name' => '杏鮑菇(100g)',
            'price' => '85',
            'description' => '重量100g',
            'product_id' => '1',
            'enabled' => 1,
            'image'=> 'https://media.istockphoto.com/photos/pleurotus-eryngii-mushrooms-picture-id1147135317?k=20&m=1147135317&s=612x612&w=0&h=Y4UQjGgn3Cb3PBwn8XD_m9nYp_3igr5G57Pvaf6Uo5c=',
        ]);
    }
}
