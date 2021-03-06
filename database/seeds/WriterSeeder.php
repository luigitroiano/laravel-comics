<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Writer;
use Illuminate\Support\Str;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newWriter = new Writer();
            $newWriter->name = $faker->firstName();
            $newWriter->lastname = $faker->lastName();
            $newWriter->slug = Str::slug($newWriter->name . '-' . $newWriter->lastname);
            $newWriter->save();
        }
    }
}
