<?php

use Illuminate\Database\Seeder;
use App\Artist;
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
            $newArtist->save();
        }
    }
}
