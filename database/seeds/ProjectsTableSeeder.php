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

        \DB::table('pro_project')->delete();
        
        \DB::table('pro_project')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number' => 'PROJECT-01',
                'drawing' => NULL,
                'business_unit_id' => 1,
                'project_sequence' => 1,
                'ship_id' => 3,
                'customer_id' => 2,
                'name' => 'OIL BARGE 1100KL PROJECT',
                'description' => 'Real Case',
                'sales_order_id' => NULL,
                'planned_start_date' => '2018-12-29',
                'planned_end_date' => '2019-05-28',
                'planned_duration' => '151',
                'actual_start_date' => '2018-12-29',
                'actual_end_date' => '2019-05-28',
                'actual_duration' => '151',
                'progress' => 0.0,
                'flag' => 'INDONESIA',
                'class_name' => NULL,
                'class_contact_person_name' => NULL,
                'class_contact_person_phone' => NULL,
                'class_contact_person_email' => NULL,
                'status' => 1,
                'user_id' => 5,
                'branch_id' => 1,
                'created_at' => '2018-12-19 00:00:00',
                'updated_at' => '2018-12-19 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'number' => 'PRO-DUMMYDUM01',
                'drawing' => NULL,
                'business_unit_id' => 1,
                'project_sequence' => 2,
                'ship_id' => 5,
                'customer_id' => 1,
                'name' => 'Kapal Dummy Boat',
                'description' => 'Dummy 19 Desember 2018',
                'sales_order_id' => NULL,
                'planned_start_date' => '2018-12-19',
                'planned_end_date' => '2019-04-23',
                'planned_duration' => '126',
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'DUMMY - Indonesia',
                'class_name' => 'DUMMY - BKI',
                'class_contact_person_name' => 'DUMMY - Berdaus',
                'class_contact_person_phone' => '08923157231',
                'class_contact_person_email' => 'dummy.berdaus@dummy.com',
                'status' => 1,
                'user_id' => 5,
                'branch_id' => 1,
                'created_at' => '2018-12-19 09:25:42',
                'updated_at' => '2018-12-19 09:25:42',
            ),
        ));

    }
}
