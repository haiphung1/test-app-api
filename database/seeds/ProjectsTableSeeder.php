<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

// @codingStandardsIgnoreLine
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i<5; $i++) {
            Project::create([
                'name' => $faker->name,
                'information' => $faker->text,
                'deadline' => $faker->dateTime,
                'type' => rand(1, 3),
                'status' => rand(1, 5)
            ]);
        }
    }
}
