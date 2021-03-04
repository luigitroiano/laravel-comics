<?php

use Illuminate\Database\Seeder;
use App\Novel_series;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class Novel_seriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $novel_series_list = config('seeder.novel_series');
        foreach ($novel_series_list as $value) {
            $newNovel_series = new Novel_series();
            $newNovel_series->name = $value['name'];
            $newNovel_series->available = $faker->boolean();
            $newNovel_series->cover = $value['cover'];
            $newNovel_series->slug = Str::slug($newNovel_series->name);
            $newNovel_series->save();
        }
    }
}
