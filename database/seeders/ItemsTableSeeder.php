<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Item::truncate();
        $faker = \Faker\Factory::create('pt_BR');
        for ($i = 0; $i < 5; $i++) {
            Item::create([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 1, 100),
                'code' => $faker->ean8
            ]);
        }
    }
}
