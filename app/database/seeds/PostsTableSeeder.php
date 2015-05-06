<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

    //Fill DB with user(s)

    //@return void

    public function run()
    {
        DB::table('posts')->delete();

        $faker = Faker::create();

        for($i=1; $i<=100; $i++)
        {

            $post = new Post();
            $post->title = $faker->catchPhrase;
            $post->body = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $post->slug = $faker->slug;
            $post->user_id = mt_rand(1,8);
            $post->save();
        }

    }
}