<?php

use Illuminate\Database\Seeder;

class ShipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('mst_ship')->insert([
            'type' => 'Tug Boat',
            'description' => 'DUMMY',
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_ship')->insert([
            'type' => 'Twin Screw Tug',
            'description' => 'DUMMY',
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_ship')->insert([
            'type' => 'Flat Top Barge',
            'description' => 'DUMMY',
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_ship')->insert([
            'type' => 'Oil Barge',
            'description' => 'DUMMY',
            'status' => 0,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_ship')->insert([
            'type' => 'Deck Cargo Barge',
            'description' => 'DUMMY',
            'status' => 0,
            'branch_id' => 1,
            'user_id' =>5,
            ]);        

    }
}
