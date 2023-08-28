<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public $categories= [
        ['it'=>'Accessori','en'=> 'Accessories', 'es'=> 'Accesorios'],
        ['it'=>'Borse','en'=> 'Bags', 'es'=> 'Bolsas'],
        ['it'=>'Camicie','en'=> 'Shirts', 'es'=>'Camisas'],
        ['it'=>'Completi','en'=> 'Dress', 'es'=> 'Vestidos'],
        ['it'=>'Felpe','en'=> 'Sweatshirts', 'es'=>'Sudaderas'],
        ['it'=>'Gonne','en'=> 'Skirt', 'es'=>'Falda'],
        ['it'=>'Orologi','en'=> 'Watch', 'es'=>'Relojes'],
        ['it'=>'Scarpe','en'=> 'Shoes', 'es'=>'Zapatos'],
        ['it'=>'Sport','en'=> 'Sport', 'es'=>'Sport'],
        ['it'=>'T-Shirt','en'=> 'T-Shirt', 'es'=>'Camiseta'],
    ];
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach($this->categories as $category){
            Category::create([
                'name' => $category['it'],
                'lang_en' => $category['en'],
                'lang_es' => $category['es'],
            ]);
        }
    }
}
