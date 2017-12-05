<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 5) as $index) {
        	User::create([
        		'name' => $faker->name,
        		'email' => $faker->unique()->email,
        		'phone'	=> $faker->phoneNumber,
        		'password' => bcrypt('fabergas'),
        		'gender' => $faker->randomElement($array = array('male', 'female', 'other'))
        	]);
        }
    }
}
