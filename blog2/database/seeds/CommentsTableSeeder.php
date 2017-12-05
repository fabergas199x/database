<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        foreach (range(1, 60) as $index) {
        	Comment::create([
        		'body'    =>$faker->sentence($nbWords = 5, $variableNbWords = true),
        		'user_id' =>$faker->numberBetween($min=1, $max=6),
        		'post_id' =>$faker->numberBetween($min=1, $max=30)
        	]);
        }
    }
}
