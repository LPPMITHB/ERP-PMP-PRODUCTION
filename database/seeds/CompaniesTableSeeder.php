<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_company')->insert([
            'code' => 'CP0001',
            'name' => 'DUMMY - PT. ASTRA INTERNATIONAL',
            'address' => 'Jakarta',
            'phone_number' => '0226655332',
            'fax' => '0226655331',
            'email' => 'astra@company.com',
            'status' => 1,
        ]);

        DB::table('mst_company')->insert([
            'code' => 'CP0002',
            'name' => 'DUMMY - PT. Pertamina (persero)',
            'address' => 'Jakarta',
            'phone_number' => '0212345122',
            'fax' => '0213424134',
            'email' => 'pertamina@company.com',
            'status' => 0,
        ]);
    }
}

