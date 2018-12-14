<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_service')->insert([
            'code' => 'SRV0001',
            'name' => 'DUMMY - General Drawing',
            'description' => 'GA, lines plan, Hydrostatic, Preliminary Stability, etc',
            'cost_standard_price' => 10000,
            'status' => 1,
            ]);
            
            DB::table('mst_service')->insert([
            'code' => 'SRV0002',
            'name' => 'DUMMY - Construction Drawing',
            'description' => 'Const. profile, Midship section Frame section, etc',
            'cost_standard_price' => 12000,
            'status' => 1,
            ]);
            
            DB::table('mst_service')->insert([
            'code' => 'SRV0003',
            'name' => 'DUMMY - System Drawing',
            'description' => 'ER layout, Cargo oil system, Fuel oil system, etc',
            'cost_standard_price' => 12000,
            'status' => 1,
            ]);
            
            DB::table('mst_service')->insert([
            'code' => 'SRV0004',
            'name' => 'DUMMY - Electrical Drawing',
            'description' => 'Power balance, Wiring diagram, Lighting arranggement, etc',
            'cost_standard_price' => 12000,
            'status' => 1,
            ]);
            
            DB::table('mst_service')->insert([
            'code' => 'SRV0005',
            'name' => 'DUMMY - Bill of Materials, Materials & Component',
            'description' => 'PPC Dept',
            'cost_standard_price' => 12000,
            'status' => 0,
            ]);
    }
}
