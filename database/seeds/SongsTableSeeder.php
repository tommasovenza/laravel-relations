<?php

use Illuminate\Database\Seeder;
use App\Song;
use Faker\Generator as Faker;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 10; $i++) { 
            for ($j=0; $j < 10; $j++) { 
                
                $new_song = new Song(); 

                $new_song->titolo_canzone = $faker->name;
                $new_song->genere = $faker->randomElement([
                    'Blues', 'Rock', 'Metal', 'Soul', 'Funk', 'Rap', 'Jazz',
                    'Disco', 'Triphop', 'New Wave', 'Indie'
                ]);
                $new_song->artista_id = $j + 1;
                
                $new_song->save();
            }
        }
    }
}
