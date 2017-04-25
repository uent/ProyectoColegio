<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NiñosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
for ($i=0; $i < 50; $i++) {
    \DB::table('niños')->insert([
        'Nombre' => $faker->firstNameFemale,
        'Rut' => $faker->randomNumber,
        'Contactado' => $faker->randomElement([0,1])
    ]);
    }
  }
}
