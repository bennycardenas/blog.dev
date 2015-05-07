<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    //Fill DB with user(s)

    //@return void

    public function run()
    {
        $this->addDevAsUser();
        $this->addRandomUsers();
    }


    protected function addRandomUsers()
    {
        $faker = Faker::create();

        for ($i=1; $i<=8; $i++)
        {
            $user = new User();
            $user->username =   $faker->userName;
            $user->email =      $faker->email;
            $user->password =   $faker->password;
            $user->save();
        }

    }

    protected function addDevAsUser()
    {
        $user1              = new User();
        $user1->username    = 'benny2';
        $user1->email       = 'benitocardenas2@gmail.com';
        $user1->password    = $_ENV['USER_PASS'];
        $user1->save();

        // $user2              = new User();
        // $user2->username    = 'benny';
        // $user2->email       = 'benitocardenas@gmail.com';
        // $user2->password    = '$_ENV['']';
        // $user2->save();
    }

}