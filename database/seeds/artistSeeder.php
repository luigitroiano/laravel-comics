<?php

use Illuminate\Database\Seeder;
use App\Artist;
use Illuminate\Support\Str;

class artistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist_list = config('seeder.artist');
        foreach ($artist_list as $value) {
            $newArtist = new Artist();
            $newArtist->name = $value['name'];
            $newArtist->lastname = $value['lastname'];
            $newArtist->slug = Str::slug($newArtist->name . '-' . $newArtist->lastname);
            $newArtist->save();
        }
    }
}
