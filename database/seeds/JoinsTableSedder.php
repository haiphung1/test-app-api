<?php

use Illuminate\Database\Seeder;
use App\Models\Join;

// @codingStandardsIgnoreLine
class JoinsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<5; $i++) {
            Join::create([
                'project_id' => rand(1, 5),
                'member_id' => rand(1, 5),
                'role' => rand(1, 5),
            ]);
        }
    }
}
