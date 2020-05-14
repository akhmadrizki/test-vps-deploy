<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 500 ; $i++) { 
            DB::table('bands')->insert([
                'name_vocalist' => $faker->name,
                'age' => $faker->numberBetween(20,35)
            ]);
        }
    }
}
