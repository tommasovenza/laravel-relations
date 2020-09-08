<?php

use Illuminate\Database\Seeder;
use App\Record;
use Faker\Generator as Faker;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 10; $i++) { 
            
            $new_record = new Record();

            $new_record->titolo = $faker->randomElement([
                'The Doors', 'Led Zeppelin IV', 'Are You Experienced',
                'Big Calm', 'Appetite For Destruction', 'Ten', 'Nevermind',
                'Nevermind The Bollocks', 'Thriller', 'Dummy', 'Blue Lines',
                'Debut', 'Post', 'Disintegration'
            ]);

            $new_record->artista = $faker->randomElement([
                'The Doors', 'Led Zeppelin', 'Jimi Hendrix', 'Morcheeba',
                'Guns N Roses', 'Pearl Jam', 'Nirvana', 'Sex Pistols', 'Michael Jackson',
                'Portishead', 'Massive Attack', 'Bjork', 'The Cure'
            ]);
            
            $new_record->anno = $faker->year();
            $new_record->numero_brani = $faker->numberBetween(8, 16);
            $new_record->descrizione = $faker->realText(200, 3);
            
            $new_record->save();
        }
    }
}
