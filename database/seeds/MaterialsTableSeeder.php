<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('mst_material')->insert([
            'code' => 'MT0001',
            'name' => 'DUMMY - ROUND BAR',
            'cost_standard_price' => 140000,
            'description' => 'DUMMY - material ke-1',
            'weight' => 0,
            'height' => 0,
            'length' => 0,
            'width' => 0,
            'volume' => 0,
            'type' => 1,
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_material')->insert([
            'code' => 'MT0002',
            'name' => 'DUMMY - STEEL PLATE',
            'cost_standard_price' => 2500000,
            'description' => 'DUMMY - material ke-2',
            'weight' => 0,
            'height' => 0,
            'length' => 0,
            'width' => 0,
            'volume' => 0,
            'type' => 0,
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_material')->insert([
            'code' => 'MT0003',
            'name' => 'DUMMY - GRAB RAIL',
            'cost_standard_price' => 300000,
            'description' => 'DUMMY - material ke-3',
            'weight' => 0,
            'height' => 0,
            'length' => 0,
            'width' => 0,
            'volume' => 0,
            'type' => 0,
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_material')->insert([
            'code' => 'MT0004',
            'name' => 'DUMMY - STEEL PLATE GRADE A',
            'cost_standard_price' => 64000000,  
            'description' => 'DUMMY - material ke-4',          
            'weight' => 0,
            'height' => 0,
            'length' => 0,
            'width' => 0,
            'volume' => 0,
            'type' => 0,
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);
            
            DB::table('mst_material')->insert([
            'code' => 'MT0005',
            'name' => 'DUMMY - L 150x90x9',
            'cost_standard_price' => 750000,
            'description' => 'DUMMY - material ke-5',
            'weight' => 0,
            'height' => 0,
            'length' => 0,
            'width' => 0,
            'volume' => 0,
            'type' => 0,
            'status' => 1,
            'branch_id' => 1,
            'user_id' =>5,
            ]);

    }
}
