<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('articles')->truncate();
        DB::table('users')->truncate();

        factory(User::class, 5)->create()->each(function ($user) {
            $nbArticles = random_int(1, 5);
            for ($i=0; $i < $nbArticles; $i++) {
                $user->articles()->save(factory(Article::class)->make(['author_id' => $user->id]));
            }
        });
    }
}
