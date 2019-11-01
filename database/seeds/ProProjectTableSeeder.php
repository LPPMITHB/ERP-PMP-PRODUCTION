<?php

use Illuminate\Database\Seeder;

class ProProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
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
                'number' => 'P-001',
                'drawing' => NULL,
                'project_standard_id' => NULL,
                'business_unit_id' => 1,
                'project_sequence' => 1,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 01',
                'person_in_charge' => 'Amir',
                'hull_number' => NULL,
                'description' => 'Project belum mulai',
                'sales_order_id' => NULL,
                'planned_start_date' => '2019-09-28',
                'planned_end_date' => '2020-01-19',
                'planned_duration' => '113',
                'arrival_date' => NULL,
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_name_2' => NULL,
                'class_contact_person_name' => 'Ahsan',
                'class_contact_person_name_2' => NULL,
                'class_contact_person_phone' => '081536662222',
                'class_contact_person_phone_2' => NULL,
                'class_contact_person_email' => 'Ahsan@bki.com',
                'class_contact_person_email_2' => NULL,
                'budget_value' => NULL,
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-09-27 00:00:00',
                'updated_at' => '2019-09-27 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'number' => 'P-002',
                'drawing' => NULL,
                'project_standard_id' => NULL,
                'business_unit_id' => 1,
                'project_sequence' => 2,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 02',
                'person_in_charge' => 'Ahuy',
                'hull_number' => NULL,
                'description' => 'Activity telat tapi aman',
                'sales_order_id' => NULL,
                'planned_start_date' => '2019-08-24',
                'planned_end_date' => '2019-12-15',
                'planned_duration' => '113',
                'arrival_date' => NULL,
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_name_2' => NULL,
                'class_contact_person_name' => 'Ahmed',
                'class_contact_person_name_2' => NULL,
                'class_contact_person_phone' => '081536662223',
                'class_contact_person_phone_2' => NULL,
                'class_contact_person_email' => 'Ahmed@bki.com',
                'class_contact_person_email_2' => NULL,
                'budget_value' => NULL,
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-08-23 00:00:00',
                'updated_at' => '2019-08-23 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'number' => 'P-003',
                'drawing' => NULL,
                'project_standard_id' => NULL,
                'business_unit_id' => 1,
                'project_sequence' => 3,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 03',
                'person_in_charge' => 'Awul',
                'hull_number' => NULL,
                'description' => 'Activity telat lebih dari planned end date',
                'sales_order_id' => NULL,
                'planned_start_date' => '2019-08-19',
                'planned_end_date' => '2019-12-10',
                'planned_duration' => '113',
                'arrival_date' => NULL,
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_name_2' => NULL,
                'class_contact_person_name' => 'Farul',
                'class_contact_person_name_2' => NULL,
                'class_contact_person_phone' => '081536662224',
                'class_contact_person_phone_2' => NULL,
                'class_contact_person_email' => 'Farul@bki.com',
                'class_contact_person_email_2' => NULL,
                'budget_value' => NULL,
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-08-18 00:00:00',
                'updated_at' => '2019-08-18 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'number' => 'P-004',
                'drawing' => NULL,
                'project_standard_id' => NULL,
                'business_unit_id' => 1,
                'project_sequence' => 4,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 04',
                'person_in_charge' => 'Hendro',
                'hull_number' => NULL,
                'description' => 'Project lewat dari planned end date',
                'sales_order_id' => 1,
                'planned_start_date' => '2019-06-05',
                'planned_end_date' => '2019-09-26',
                'planned_duration' => '113',
                'arrival_date' => NULL,
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 21.6,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_name_2' => NULL,
                'class_contact_person_name' => 'Bambang',
                'class_contact_person_name_2' => NULL,
                'class_contact_person_phone' => '081536662225',
                'class_contact_person_phone_2' => NULL,
                'class_contact_person_email' => 'Bambang@bki.com',
                'class_contact_person_email_2' => NULL,
                'budget_value' => NULL,
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-06-04 00:00:00',
                'updated_at' => '2019-06-04 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'number' => 'P-005',
                'drawing' => NULL,
                'project_standard_id' => NULL,
                'business_unit_id' => 1,
                'project_sequence' => 5,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 05',
                'person_in_charge' => 'Aseng',
                'hull_number' => NULL,
                'description' => 'Sudah ada konfirmasi',
                'sales_order_id' => NULL,
                'planned_start_date' => '2019-08-24',
                'planned_end_date' => '2019-12-15',
                'planned_duration' => '113',
                'arrival_date' => NULL,
                'actual_start_date' => '2019-08-24',
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 21.6,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_name_2' => NULL,
                'class_contact_person_name' => 'Aseng',
                'class_contact_person_name_2' => NULL,
                'class_contact_person_phone' => '081536662225',
                'class_contact_person_phone_2' => NULL,
                'class_contact_person_email' => 'Aseng@bki.com',
                'class_contact_person_email_2' => NULL,
                'budget_value' => NULL,
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-08-23 00:00:00',
                'updated_at' => '2019-08-23 00:00:00',
            ),
            
        ));
        
    }
}