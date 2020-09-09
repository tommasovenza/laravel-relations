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
        // SOLUZIONE 1

        // for ($i=0; $i < 10; $i++) { 
        //     for ($j=0; $j < 10; $j++) { 
                
        //         $new_song = new Song(); 

        //         $new_song->titolo_canzone = $faker->name;
        //         $new_song->genere = $faker->randomElement([
        //             'Blues', 'Rock', 'Metal', 'Soul', 'Funk', 'Rap', 'Jazz',
        //             'Disco', 'Triphop', 'New Wave', 'Indie'
        //         ]);
        //         $new_song->record_id = $ + 1;
                
        //         $new_song->save();

        //     }
        // }
        
        // SOLUZIONE 2
        for ($i=0; $i < 30; $i++) { 
                
            $new_song = new Song(); 

            $new_song->titolo_canzone = $faker->name;
            $new_song->genere = $faker->randomElement([
                'Blues', 'Rock', 'Metal', 'Soul', 'Funk', 'Rap', 'Jazz',
                'Disco', 'Triphop', 'New Wave', 'Indie'
            ]);
            $new_song->record_id = $faker->numberBetween(1, 10);
            
            $new_song->save();

        }
    }
}
