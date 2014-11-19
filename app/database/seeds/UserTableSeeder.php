<?php

class UserTableSeeder Extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++)
        {
            $user = User::create(array(
                'email' => $faker->email,
                'username' => $faker->unique()->userName,
                'password' => $faker->word,
                'remember_token' => str_random(50)
            ));
        }

    }
 }