<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ru_RU');
        $dirpath = public_path("images");
        $arrfiles = scandir($dirpath."/");
        array_shift($arrfiles);
        array_shift($arrfiles);
// print_r($arrfiles);
// dd();
        for ($i = 0; $i < count($arrfiles); $i++)
        {
            Post::create([
                'title' => $faker->realText(20),
                'excerpt' => $faker->realText(100),
                'content' => $faker->realText(180),
                'image' => $arrfiles[$i],
            ]);
        }
    }
}
