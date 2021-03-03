<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(artistSeeder::class);
        $this->call(NovelSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(WriterSeeder::class);
    }
}
