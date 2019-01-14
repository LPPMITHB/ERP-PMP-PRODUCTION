<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mst_resource')->insert([
            'code' => 'RSC0001',
            'name' => 'Crane',
            'cost_standard_price' => 1000000,
            'branch_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('mst_resource')->insert([
            'code' => 'RSC0002',
            'name' => 'Forklift',
            'branch_id' => 1,
            'user_id' => 1,
            'cost_standard_price' => 1500000,
        ]);

        DB::table('mst_resource')->insert([
            'code' => 'RSC0003',
            'name' => 'Wheel Loader',
            'branch_id' => 1,
            'user_id' => 1,
            'cost_standard_price' => 2500000,
        ]);

        DB::table('mst_resource')->insert([
            'code' => 'RSC0004',
            'name' => 'Marine Rubber Airbag',
            'branch_id' => 1,
            'user_id' => 1,
            'cost_standard_price' => 2250000,
        ]);

        DB::table('mst_resource')->insert([
            'code' => 'RSC0005',
            'name' => 'Excavator',
            'branch_id' => 1,
            'user_id' => 1,
            'cost_standard_price' => 3250000,
        ]);
    }
}
