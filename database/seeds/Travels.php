<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class Travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $newTravel = new Travel();
            $newTravel->date = $faker->date();
            $newTravel->destinazione = $faker->word();
            $newTravel->hotel = $faker->word();
            $newTravel->prezzo = $faker->randomDigit();
            $newTravel->save();
        }
    }
}
