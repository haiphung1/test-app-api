<?php

use Illuminate\Database\Seeder;
use App\Models\Member;

// @codingStandardsIgnoreLine
class MembersTableSeeder extends Seeder
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
            Member::create([
                'name' => $faker->name,
                'information' => $faker->text,
                'phone' => mt_rand(),
                'date_of_birth' => $faker->date(),
                'avatar' => 'images/avatar.png',
                'position' => rand(1, 7),
                'gender' => rand(1, 2)
            ]);
        }
    }
}
