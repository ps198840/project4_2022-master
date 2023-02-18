<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'mozerella',
            'unit_id' => '1',
            'price' => '1'
        ]);
        DB::table('ingredients')->insert([
            'name' => 'oregano',
            'unit_id' => '1',
            'price' => '1'
        ]);
        DB::table('ingredients')->insert([
            'name' => 'tonijn',
            'unit_id' => '1',
            'price' => '3'
        ]);
        DB::table('ingredients')->insert([
            'name' => 'knoflook',
            'unit_id' => '1',
            'price' => '2'
        ]);
        DB::table('ingredients')->insert([
            'name' => 'olijfolie',
            'unit_id' => '2',
            'price' => '5'
        ]);
    }
}
