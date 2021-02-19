<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Item;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Customer::truncate();

        $faker = \Faker\Factory::create('pt_BR');

        for($i = 0; $i < 10; $i++){
            $customer = Customer::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'document' => $faker->cpf,
                'street' => $faker->streetName,
                'city' => $faker->city,
                'zip_code' => $faker->postcode,
                'state' => $faker->state,
                // 'complement' =>  $faker->word
            ]);

            $customer->items()->saveMany(
                $faker->randomElements(
                    array(
                        Item::find(1),
                        Item::find(2),
                        Item::find(3),
                        Item::find(4),
                        Item::find(5),
                    ), $faker->numberBetween(1, 5), false
                )
            );

        }
    }
}
