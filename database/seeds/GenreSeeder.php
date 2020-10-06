<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            'Action',
            'Adventure',
            'Comedy',
            'Crime',
            'Drama',
            'Fantasy',
            'Historical',
            'Historical fiction',
            'Horror',
            'Magical realism',
            'Mystery',
            'Paranoid fiction',
            'Philosophical',
            'Political',
            'Romance',
            'Saga',
            'Satire',
            'Science fiction',
            'Social',
            'Speculative',
            'Thriller',
            'Urban',
            'Western'

        ];

        foreach($genres as $genre){
            Genre::create(['name' => $genre]);
        }
    }
}
