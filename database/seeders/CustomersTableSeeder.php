<?php

namespace Database\Seeders;

use App\Models\Customer;
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
            Customer::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'document' => $faker->cpf,
                'street' => $faker->streetName,
                'city' => $faker->city,
                'zip_code' => $faker->postcode,
                'state' => $faker->state,
                // 'complement' =>  $faker->word
            ]);
        }
    }
}
