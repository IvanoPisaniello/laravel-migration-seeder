<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {

        $aziende = ["Trenitalia", "Italo"];
        $stazioni = ["Roma terimini", "Roma Tiburtina", "Firenze Santa Maria Novella", "Napoli Centrale", "Milano Centrale", "Benevento Centrale", "Torino Porta Nuova"];


        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $aziende[array_rand($aziende)];
            $train->stazione_di_partenza = $stazioni[array_rand($stazioni)];
            $train->stazione_di_arrivo = $stazioni[array_rand($stazioni)];
            $train->orario_di_partenza = $Faker->time();
            $train->orario_di_arrivo = $Faker->time();
            $train->codice_treno = $Faker->unique()->randomNumber(7);
            $train->numero_carrozze = $Faker->numberBetween(5, 15);
            $train->in_orario = $Faker->boolean;
            $train->cancellato = $Faker->boolean;

            $train->save();
        };
    }
}
