<?php

use Illuminate\Database\Seeder;

class StorageLocationDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 1,
            'quantity' => 10,
            'reserved' => 1,
            'storage_location_id' => 1,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 1,
            'quantity' => 10,
            'reserved' => 5,
            'storage_location_id' => 2,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 1,
            'quantity' => 5,
            'reserved' => 2,  
            'storage_location_id' => 1,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 1,
            'quantity' => 15,
            'reserved' => 2,  
            'storage_location_id' => 2,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 2,
            'quantity' => 5,
            // 'reserved' => 2,  
            'storage_location_id' => 1,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 2,
            'quantity' => 5,
            // 'reserved' => 2,  
            'storage_location_id' => 2,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 2,
            'quantity' => 5,
            // 'reserved' => 2,  
            'storage_location_id' => 1,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 3,
            'quantity' => 5,
            // 'reserved' => 2,  
            'storage_location_id' => 1,
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 3,
            'quantity' => 3,
            'reserved' => 3,    
            'storage_location_id' => 2,       
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 4,
            'quantity' => 17,
            'reserved' => 3,    
            'storage_location_id' => 1,       
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 4,
            'quantity' => 4,
            'reserved' => 4,    
            'storage_location_id' => 1,        
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 5,
            'quantity' => 4,
            // 'reserved' => 4,    
            'storage_location_id' => 2,        
        ]);

        DB::table('mst_storage_location_detail')->insert([
            'material_id' => 5,
            'quantity' => 6,
            'reserved' => 4,    
            'storage_location_id' => 1,        
        ]);
    }
}
