<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $apiKey = '1acc688a333a713673ba5711f8f671d0';
        $baseUrl = 'https://api.themoviedb.org/3/';
        // On fait une requête sur une API
        $genres = Http::withoutVerifying()->get($baseUrl . '/genre/movie/list?language=fr-FR&api_key=' . $apiKey)->json('genres');


        Category::factory()->createMany($genres);



        $movies = Http::withoutVerifying()
            ->get($baseUrl . '/movie/now_playing?language=fr-FR&api_key=' . $apiKey)->json('results');

        foreach ($movies as $movie) {
            $movie = Http::withoutVerifying()
                ->get($baseUrl . '/movie/' . $movie['id'] . '?language=fr-FR&append_to_response=video&api_key=' . $apiKey)
                ->json();
                
            movie::factory()->create([
                'title' => $movie['title'],
                'synopsis' => $movie['overview'],
                'duration'=> $movie['runtime'],
                'cover'=> 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'],
                'released_at'=> $movie['release_date'],
                'youtube'=> $movie['video']['results'][0]['key'] ?? null,
                'category_id' => $movie['genre'][0]['id'] ?? null,

        ]);
        }
    }
}
