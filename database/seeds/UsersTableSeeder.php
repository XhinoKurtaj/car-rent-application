<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name' => 'user test',
            'email' => 'user@test.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'full_name' => 'john doe',
            'email' => 'johndoe@email.com',
            'password' => bcrypt('12345678'),
        ]);

        $faker = Faker\Factory::create();

        factory(User::class, 1000)->create();
    }
}
