<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $cities = [
            ['state_id' => 1, 'name' => 'Jaipur', 'pincode' => '302001'],
            ['state_id' => 1, 'name' => 'Udaipur', 'pincode' => '313001'],
            ['state_id' => 2, 'name' => 'Pune', 'pincode' => '411001'],
            ['state_id' => 3, 'name' => 'Surat', 'pincode' => '395001'],
            ['state_id' => 4, 'name' => 'Delhi', 'pincode' => '110001'],
            // ... your cleaned-up and deduplicated data
        ];

        // Chunk and insert
        $chunks = array_chunk($cities, 1000);
        foreach ($chunks as $chunk) {
            DB::table('cities')->insert($chunk);
        }
}
}