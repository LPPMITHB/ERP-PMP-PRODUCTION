<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pro_project')->insert([
            'number' => 'PROJECT-01',
            'business_unit_id' => 1,
            'name' => 'OIL BARGE 1100KL PROJECT',
            'description' => 'Real Case',
            // 'sales_order_id' => 1,
            'ship_id' => 3,
            'customer_id' => 2,
            'planned_start_date' => '2018-12-29',
            'planned_end_date' => '2019-5-28',
            'progress' => 0,
            'planned_duration' => '151',
            'actual_start_date' => '2018-12-29',
            'actual_end_date' => '2019-5-28',
            'actual_duration' => '151',
            'flag' => 'INDONESIA',
            'user_id' => 5,
            'branch_id' => 1,
        ]);

    }
}
