<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        foreach (range(1, 30) as $index) {
        	Post::create([
        		'title'   =>$faker->sentence($nbWords = 5, $variableNbWords = true),
        		'body'    =>$faker->paragraph($nbSentences = 4, $variableNbSentences = true),
        		'user_id' =>$faker->numberBetween($min=1, $max=6)
        	]);
        }
    }
}
