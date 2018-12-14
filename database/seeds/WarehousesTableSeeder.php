<?php

use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_warehouse')->insert([
            'code' => 'WRH0001',
            'name' => 'DUMMY - Warehouse 1',
            'description' => 'DUMMY - Gudang pertama',
            'status' => '1',
            'branch_id' => '1',
            'user_id' => 5,                    
            ]);

        DB::table('mst_warehouse')->insert([
            'code' => 'WRH0002',
            'name' => 'DUMMY - Warehouse 2',
            'description' => 'DUMMY - Gudang kedua',
            'status' => '1',
            'branch_id' => '1',
            'user_id' => 5,                    
            ]);

        DB::table('mst_warehouse')->insert([
            'code' => 'WRH0003',
            'name' => 'DUMMY - Warehouse 3',
            'description' => 'DUMMY - Gudang ketiga',
            'status' => '1',
            'branch_id' => '1',
            'user_id' => 5,                    
            ]);
    }
}
