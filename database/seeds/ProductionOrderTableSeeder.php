<?php

use Illuminate\Database\Seeder;

class ProductionOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trx_production_order')->insert([
            'number' => 'PRO00001',
            'project_id' => 1,
            'wbs_id' => 1,
            'status' => 1,
            'branch_id' => 1,
            'user_id' => 4,
            ]);

    }
}
