<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Lesson;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            Lesson::create([
                'title' => $faker->sentence(4),
                'body' => $faker->paragraph(5),
                'some_bool' => $faker->boolean
            ]);
        }
    }
}
