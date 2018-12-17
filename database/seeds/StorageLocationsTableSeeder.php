<?php

use Illuminate\Database\Seeder;

class StorageLocationsTableSeeder extends Seeder
{
    /**
 * Run the database seeds.
 *
 * @return void
 */
    public function run()
{
        DB::table('mst_storage_location')->insert([
            'code' => 'SL0001',
            'name' => 'DUMMY - Gudang A',
            'area' => '400',
            'description' => 'DUMMY - StorLoc 1',
            'status' => 1,
            'warehouse_id' => 1,
            'branch_id' => 1,
            'user_id' => 5,
            ]);
            
        DB::table('mst_storage_location')->insert([
            'code' => 'SL0002',
            'name' => 'DUMMY - Gudang B',
            'area' => '440',
            'description' => 'DUMMY - StorLoc 2',
            'status' => 1,
            'warehouse_id' => 1,
            'branch_id' => 1,
            'user_id' => 5,
            ]);


}
}