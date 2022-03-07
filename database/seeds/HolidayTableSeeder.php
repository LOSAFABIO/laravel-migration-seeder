<?php

use Illuminate\Database\Seeder;

use App\Holiday;

use Faker\Generator as Faker;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $theHoliday = new Holiday();
            $theHoliday->Destinazione = $faker->Destinazione;
            $theHoliday->GiornoPartenza = $faker->GiornoPartenza;
            $theHoliday->DurataViaggio = $faker->DurataViaggio;
            $theHoliday->CostoViaggio = $faker->CostoViaggio;
            $theHoliday->save();

        }
    }
}