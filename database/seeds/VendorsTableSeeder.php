<?php

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_vendor')->insert([
                    'code' => 'VR0001',
                    'name' => 'DUMMY - Korfmann',
                    'email' => 'akorfmannr@technorati.com',
                    'address' => 'DUMMY - 0148 Commercial Point',
                    'phone_number' => '1328561818',
                    'status' => 0,
                    'branch_id' => 1,
                    'user_id' =>5,                    
                    ]);

        DB::table('mst_vendor')->insert([
                    'code' => 'VR0002',
                    'name' => 'DUMMY - Cobley',
                    'email' => 'acobleyu@symantec.com',
                    'address' => 'DUMMY - 205 Lunder Parkway',
                    'phone_number' => '5695925032',
                    'status' => 0,
                    'branch_id' => 1,
                    'user_id' =>5,
                    ]);

        }
    }

