<?php

use Illuminate\Database\Seeder;

class JoinsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<5; $i++ ) {
            DB::table('joins')->insert([
                'project_id' => rand(1, 5),
                'member_id' => rand(1, 5),
                'role' => rand(1, 5),
            ]);
        }
    }
}
