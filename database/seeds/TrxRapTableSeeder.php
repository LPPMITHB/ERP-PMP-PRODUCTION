<?php

use Illuminate\Database\Seeder;

class TrxRapTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trx_rap')->delete();
        
        \DB::table('trx_rap')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number' => 'RAP-1900001',
                'project_id' => 2,
                'bom_id' => 1,
                'total_price' => 15075000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 11:49:11',
                'updated_at' => '2019-04-03 11:49:11',
            ),
            1 => 
            array (
                'id' => 2,
                'number' => 'RAP-1900002',
                'project_id' => 2,
                'bom_id' => 2,
                'total_price' => 15075000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 11:52:31',
                'updated_at' => '2019-04-03 11:52:31',
            ),
            2 => 
            array (
                'id' => 3,
                'number' => 'RAP-1900003',
                'project_id' => 2,
                'bom_id' => 3,
                'total_price' => 92250000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:12:05',
                'updated_at' => '2019-04-03 12:12:05',
            ),
            3 => 
            array (
                'id' => 4,
                'number' => 'RAP-1900004',
                'project_id' => 2,
                'bom_id' => 4,
                'total_price' => 92250000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:12:48',
                'updated_at' => '2019-04-03 12:12:48',
            ),
            4 => 
            array (
                'id' => 5,
                'number' => 'RAP-1900005',
                'project_id' => 2,
                'bom_id' => 5,
                'total_price' => 19200000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:14:20',
                'updated_at' => '2019-04-03 12:14:20',
            ),
        ));
        
        // project 5
        \DB::table('trx_rap')->insert(array (
            0 => 
            array (
                'id' => 6,
                'number' => 'RAP-1900006',
                'project_id' => 5,
                'bom_id' => 6,
                'total_price' => 15075000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 11:49:11',
                'updated_at' => '2019-04-03 11:49:11',
            ),
            1 => 
            array (
                'id' => 7,
                'number' => 'RAP-1900007',
                'project_id' => 5,
                'bom_id' => 7,
                'total_price' => 15075000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 11:52:31',
                'updated_at' => '2019-04-03 11:52:31',
            ),
            2 => 
            array (
                'id' => 8,
                'number' => 'RAP-1900008',
                'project_id' => 5,
                'bom_id' => 8,
                'total_price' => 92250000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:12:05',
                'updated_at' => '2019-04-03 12:12:05',
            ),
            3 => 
            array (
                'id' => 9,
                'number' => 'RAP-1900009',
                'project_id' => 5,
                'bom_id' => 9,
                'total_price' => 92250000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:12:48',
                'updated_at' => '2019-04-03 12:12:48',
            ),
            4 => 
            array (
                'id' => 10,
                'number' => 'RAP-1900010',
                'project_id' => 5,
                'bom_id' => 10,
                'total_price' => 19200000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:14:20',
                'updated_at' => '2019-04-03 12:14:20',
            ),
        ));

        // project 4
        \DB::table('trx_rap')->insert(array (
            0 => 
            array (
                'id' => 11,
                'number' => 'RAP-1900011',
                'project_id' => 4,
                'bom_id' => 11,
                'total_price' => 15075000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 11:49:11',
                'updated_at' => '2019-04-03 11:49:11',
            ),
            1 => 
            array (
                'id' => 12,
                'number' => 'RAP-1900012',
                'project_id' => 4,
                'bom_id' => 12,
                'total_price' => 15075000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 11:52:31',
                'updated_at' => '2019-04-03 11:52:31',
            ),
            2 => 
            array (
                'id' => 13,
                'number' => 'RAP-1900013',
                'project_id' => 4,
                'bom_id' => 13,
                'total_price' => 92250000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:12:05',
                'updated_at' => '2019-04-03 12:12:05',
            ),
            3 => 
            array (
                'id' => 14,
                'number' => 'RAP-1900014',
                'project_id' => 4,
                'bom_id' => 14,
                'total_price' => 92250000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:12:48',
                'updated_at' => '2019-04-03 12:12:48',
            ),
            4 => 
            array (
                'id' => 15,
                'number' => 'RAP-1900015',
                'project_id' => 4,
                'bom_id' => 15,
                'total_price' => 19200000.0,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-03 12:14:20',
                'updated_at' => '2019-04-03 12:14:20',
            ),
        ));
    }
}