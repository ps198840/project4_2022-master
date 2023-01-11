<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_product')->insert([
            'ingredient_id' => '1',
            'product_id' => '1'
        ]);
        DB::table('ingredient_product')->insert([
            'ingredient_id' => '2',
            'product_id' => '1'
        ]);
        DB::table('ingredient_product')->insert([
            'ingredient_id' => '3',
            'product_id' => '2'
        ]);
        DB::table('ingredient_product')->insert([
            'ingredient_id' => '2',
            'product_id' => '3'
        ]);
        DB::table('ingredient_product')->insert([
            'ingredient_id' => '4',
            'product_id' => '3'
        ]);
    }
}
