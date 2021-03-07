<?php

use Illuminate\Database\Seeder;
use App\Novel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $novel_list = config('seeder.novels');
        foreach ($novel_list as $value) {
            $newNovel = new Novel();
            $newNovel->name = $value['name'];
            $newNovel->price = $faker->randomFloat(2, 3, 100);
            $newNovel->description = $faker->text(1000);
            $newNovel->on_sale_date = $faker->date('Y_m_d');
            $newNovel->available = $faker->boolean();
            $newNovel->volume = $faker->numberBetween(1, 100);
            $newNovel->trim_size = $faker->randomElement(['6 5/8', '10 3/16']);
            $newNovel->page = $faker->numberBetween(50, 150);
            $newNovel->rated = $faker->randomElement(['Teen']);
            $newNovel->cover = $value['cover'];
            $newNovel->parallax = $value['parallax'];
            $newNovel->slug = Str::slug($newNovel->name);
            $newNovel->save();
        }
    }
}
