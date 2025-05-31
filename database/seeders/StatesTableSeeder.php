<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
        ['id' => 1, 'name' => 'Rajasthan'],
        ['id' => 2, 'name' => 'Maharashtra'],
        ['id' => 3, 'name' => 'Gujarat'],
        ['id' => 4, 'name' => 'Delhi'],
        // Add more as needed
    ];

    DB::table('states')->insert($states);
    }
}
