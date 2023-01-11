<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Margherita',
            'description' => 'De klassieker met mozerella en oregano.',
            'image' => 'https://cdn.loveandlemons.com/wp-content/uploads/2019/09/margherita-pizza.jpg',
            'price' => '14',
            'category_id' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Tonno',
            'description' => 'Heerlijke pizza met tonijn en ui.',
            'image' => 'https://images.eatsmarter.com/sites/default/files/styles/1600x1200/public/pizza-tonno-519340.jpg',
            'price' => '12',
            'category_id' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Marinara',
            'description' => 'Met knoflook, oregano en extra vergine olijfolie.',
            'image' => 'https://www.pizzarecipe.org/wp-content/uploads/2019/01/Pizza-Marinita-2000x1500.jpg',
            'price' => '15',
            'category_id' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Quattro Formaggi',
            'description' => 'Simpele pizza met mozerella, gorgonzola, fontina en parmesaan.',
            'image' => 'https://www.insidetherustickitchen.com/wp-content/uploads/2020/07/Quattro-formaggi-pizza-square-Inside-the-rustic-kitchen.jpg',
            'price' => '12',
            'category_id' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Vanille Milkshake',
            'description' => 'De Amerikaanse classic',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHoCi0D5efpO-5dsgsFjJYXMIycHC7Hu9emA&usqp=CAU',
            'price' => '4',
            'category_id' => '2'
        ]);
        Product::factory(20)->create()->unique();
    }
}
