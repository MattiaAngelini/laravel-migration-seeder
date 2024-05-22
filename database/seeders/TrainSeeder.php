<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->time,
                'orario_di_arrivo' => $faker->time,
                'codice_treno' => $faker->unique()->numerify('#####'),
                'numero_carrozze' => $faker->numberBetween(3, 20),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean
            ]);
        }
    }
}