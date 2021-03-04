<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $article_list = config('seeder.article');
        foreach ($article_list as $value) {
            $newArticle = new Article();
            $newArticle->title = $value['title'];
            $newArticle->subtitle = $faker->sentence(5);
            $newArticle->body = $faker->text(1000);
            $newArticle->cover = $value['cover'];
            $newArticle->slug = Str::slug($newArticle->title);
            $newArticle->save();
        }
    }
}
