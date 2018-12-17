<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mst_customer')->insert([
        'code' => 'CUST0001',
        'name' => 'DUMMY - PT. MEGA SURYA ERATAMA',
        'contact_person_name' => 'DUMMY - Mesakh Tama',
        'contact_person_email' => 'mesakh.tama@gmail.com',
        'address' => 'DUMMY - Dsn Jasem, Kelurahan Jasem Kecamatan Ngoro Kab. Mojokerto',
        'contact_person_phone' => '08125456372',
        'status' => 0,
        'branch_id' => 1,
        'user_id' =>5,
        ]);

        DB::table('mst_customer')->insert([
        'code' => 'CUST0002',
        'name' => 'DUMMY - PT. PELAYARAN NASIONAL TANJUNG RIAU SERVIS',
        'contact_person_name' => 'DUMMY - Kris Parlindungan',
        'contact_person_email' => 'kparlindungan@gmail.com',
        'address' => 'DUMMY - Wisma Pondok Indah 2 Lt. 2 Suite 201 Jl Sultan Iskandar Muda Kav V - TA, Pondok Indah',
        'contact_person_phone' => '085314265833',
        'status' => 1,
        'branch_id' => 1,
        'user_id' =>5,
        ]);

        }
    }