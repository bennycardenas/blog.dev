<?php

// use Faker\Factory as Faker; - ***

class PostsTableSeeder extends Seeder {

    //Fill DB with user(s)
    //@return void

    public function run()
    {
        // $faker = Faker::create(); ***
        $post = create();

        // for($i=1; $i<=100; $i++)
        // {
        //     $user = User::all()->random();


        //     Post::create ([

        //     'title' => $faker->catchPhrase,
        //     'body'  => $faker->realText($maxNbChars = 200, $indexSize = 2),
        //     'slug'  => $faker->unique()->slug,
        //     'user_id'  => $user->id,

        //     ]);
        // }


        // $post = new Post();
        // $post->title = $faker->catchPhrase;
        // $post->body = $faker->realText($maxNbChars = 200, $indexSize = 2);
        // $post->slug = $faker->slug;
        // $post->$user->id = mt_rand(1,8);
        // $post->save();

        $post = new Post();
        $post->title = 'First Test Post Title';
        $post->body = 'First Test Post Body';
        $post->slug = title->slug;
        $post->$user->id = mt_rand(1,8);
        $post->save();
    }
}



