<?php

use Illuminate\Database\Seeder;

class ProjectActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //01
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100006',
            'name' => 'General Drawing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 3,
            'planned_duration' => 26,
            'planned_start_date' => '2018-12-30',
            'planned_end_date' => '2019-1-24',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100007',
            'name' => 'Construction Drawing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 3,
            'planned_duration' => 15,
            'planned_start_date' => '2019-1-1',
            'planned_end_date' => '2019-1-15',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100008',
            'name' => 'System Drawing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 3,
            'planned_duration' => 31,
            'planned_start_date' => '2019-1-1',
            'planned_end_date' => '2019-1-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100009',
            'name' => 'Electrical Drawing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 3,
            'planned_duration' => 14,
            'planned_start_date' => '2019-1-18',
            'planned_end_date' => '2019-1-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100010',
            'name' => 'Submission DWG to class',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 3,
            'planned_duration' => 18,
            'planned_start_date' => '2019-1-14',
            'planned_end_date' => '2019-1-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100011',
            'name' => 'Approved DWG to class',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 3,
            'planned_duration' => 23,
            'planned_start_date' => '2019-1-24',
            'planned_end_date' => '2019-2-15',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100012',
            'name' => 'Bill of Materials, Materials & Components',
            'description' => 'PPC Dept',
            'status' => 1,
            'wbs_id' => 4,
            'planned_duration' => 11,
            'planned_start_date' => '2019-1-17',
            'planned_end_date' => '2019-1-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100013',
            'name' => 'Prepare production DWG',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 4,
            'planned_duration' => 17,
            'planned_start_date' => '2019-1-15',
            'planned_end_date' => '2019-1-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //14
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100014',
            'name' => 'Prepare facility support',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 4,
            'planned_duration' => 22,
            'planned_start_date' => '2019-1-29',
            'planned_end_date' => '2019-1-19',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100015',
            'name' => 'Assignment subcont, Approve BOM',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 4,
            'planned_duration' => 20,
            'planned_start_date' => '2018-12-29',
            'planned_end_date' => '2019-1-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100016',
            'name' => 'Prepare quality document, manual, and operation book of equipment',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 4,
            'planned_duration' => 152,
            'planned_start_date' => '2018-12-29',
            'planned_end_date' => '2019-5-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100017',
            'name' => 'Prepare ship document',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 4,
            'planned_duration' => 152,
            'planned_start_date' => '2018-12-29',
            'planned_end_date' => '2019-5-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //18
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100018',
            'name' => 'Raw Mateial',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 59,
            'planned_start_date' => '2019-1-1',
            'planned_end_date' => '2019-2-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100019',
            'name' => 'Generator Set',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 84,
            'planned_start_date' => '2019-1-18',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100020',
            'name' => 'Deck Machineries & compressor',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 84,
            'planned_start_date' => '2019-1-18',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100021',
            'name' => 'Pumps, pipe, valve dan fittings',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 84,
            'planned_start_date' => '2019-1-18',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100022',
            'name' => 'Safety Equipment',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 84,
            'planned_start_date' => '2019-1-18',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);


        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100023',
            'name' => 'Doors, windows, skylights and manhole',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 61,
            'planned_start_date' => '2019-1-18',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100024',
            'name' => 'Electrical, panel & MSB',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 84,
            'planned_start_date' => '2019-1-18',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100025',
            'name' => 'Lighting, Navigation and Communication',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 56,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100026',
            'name' => 'Coating and Anodes',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 56,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100027',
            'name' => 'Interior & Carpentry',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 56,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100028',
            'name' => 'Bollards, Tyre fender and chain',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 5,
            'planned_duration' => 56,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //29 Transom
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100029',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 9,
            'planned_duration' => 8,
            'planned_start_date' => '2019-2-1',
            'planned_end_date' => '2019-2-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100030',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 9,
            'planned_duration' => 8,
            'planned_start_date' => '2019-2-9',
            'planned_end_date' => '2019-2-16',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100031',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 9,
            'planned_duration' => 8,
            'planned_start_date' => '2019-2-12',
            'planned_end_date' => '2019-2-19',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100032',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 9,
            'planned_duration' => 8,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-22',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100033',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 9,
            'planned_duration' => 4,
            'planned_start_date' => '2019-2-23',
            'planned_end_date' => '2019-2-26',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //34 Blok 1
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100034',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 10,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-1',
            'planned_end_date' => '2019-2-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100035',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 10,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100036',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 10,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100037',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 10,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100038',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 10,
            'planned_duration' => 6,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //39 Block 2
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100039',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 11,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-1',
            'planned_end_date' => '2019-2-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100040',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 11,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100041',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 11,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100042',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 11,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100043',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 11,
            'planned_duration' => 6,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //44 Block 3
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100044',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 12,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-1',
            'planned_end_date' => '2019-2-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100045',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 12,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100046',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 12,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100047',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 12,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100048',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 12,
            'planned_duration' => 6,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //49 Block 4
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100049',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 13,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-1',
            'planned_end_date' => '2019-2-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100050',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 13,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100051',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 13,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100052',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 13,
            'planned_duration' => 6,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //53 Block 5
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100053',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 14,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-1',
            'planned_end_date' => '2019-2-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100054',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 14,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100055',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 14,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100056',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 14,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100057',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 14,
            'planned_duration' => 6,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //58 Block 6
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100058',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 15,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-1',
            'planned_end_date' => '2019-2-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100059',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 15,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100060',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 15,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100061',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 15,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100062',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 15,
            'planned_duration' => 6,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //63 Block 1
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100063',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 17,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-8',
            'planned_end_date' => '2019-2-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100064',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 17,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100065',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 17,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100066',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 17,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100067',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 17,
            'planned_duration' => 5,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //68 Block 2
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100068',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 18,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-8',
            'planned_end_date' => '2019-2-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100069',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 18,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100070',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 18,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100071',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 18,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100072',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 18,
            'planned_duration' => 5,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //73 Block 3
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100073',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 19,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-8',
            'planned_end_date' => '2019-2-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100074',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 19,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100075',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 19,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100076',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 19,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100077',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 19,
            'planned_duration' => 5,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //78 Block 4
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100078',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 20,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-8',
            'planned_end_date' => '2019-2-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100079',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 20,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100080',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 20,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100081',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 20,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100082',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 20,
            'planned_duration' => 5,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //83 Block 5
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100083',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 21,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-8',
            'planned_end_date' => '2019-2-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100084',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 21,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100085',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 21,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100086',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 21,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100087',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 21,
            'planned_duration' => 5,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //88 Block 6
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100088',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 22,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-8',
            'planned_end_date' => '2019-2-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100089',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 22,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100090',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 22,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100091',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 22,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100092',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 22,
            'planned_duration' => 5,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //93 Block 1
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100093',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 24,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100094',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 24,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100095',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 24,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100096',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 24,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100097',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 24,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //98 Block 2
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100098',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 25,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100099',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 25,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100100',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 25,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100101',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 25,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100102',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 25,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //103 Block 3
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100103',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 26,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100104',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 26,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100105',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 26,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100106',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 26,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100107',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 26,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //104 Block 4
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100108',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 27,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100109',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 27,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100110',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 27,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100111',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 27,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100112',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 27,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //113 Block 6
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100113',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 28,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100114',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 28,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100115',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 28,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100116',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 28,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100117',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 28,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //118 Block 2
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100118',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 30,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100119',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 30,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100120',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 30,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100121',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 30,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100122',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 30,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //123 Block 3
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100123',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 31,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100124',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 31,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100125',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 31,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100126',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 31,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100127',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 31,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //128 Block 4
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100128',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 32,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100129',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 32,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100130',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 32,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100131',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 32,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100132',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 32,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //133 Block 5
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100133',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 33,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100134',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 33,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100135',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 33,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100136',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 33,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100137',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 33,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //138 Block 6
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100138',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 34,
            'planned_duration' => 11,
            'planned_start_date' => '2019-2-15',
            'planned_end_date' => '2019-2-25',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100139',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 34,
            'planned_duration' => 12,
            'planned_start_date' => '2019-2-24',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100140',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 34,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100141',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 34,
            'planned_duration' => 11,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-3-31',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100142',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 34,
            'planned_duration' => 4,
            'planned_start_date' => '2019-3-31',
            'planned_end_date' => '2019-4-3',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //143 Block 1 Side Sheel
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100143',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 36,
            'planned_duration' => 10,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100144',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 36,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100145',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 36,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100146',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 36,
            'planned_duration' => 9,
            'planned_start_date' => '2019-3-30',
            'planned_end_date' => '2019-4-7',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100147',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 36,
            'planned_duration' => 3,
            'planned_start_date' => '2019-4-7',
            'planned_end_date' => '2019-4-9',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100148',
            'name' => 'Side Sheel platting',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 36,
            'planned_duration' => 9,
            'planned_start_date' => '2019-4-9',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //149 Block 2 Side Sheel
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100149',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 37,
            'planned_duration' => 10,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100150',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 37,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100151',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 37,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100152',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 37,
            'planned_duration' => 9,
            'planned_start_date' => '2019-3-30',
            'planned_end_date' => '2019-4-7',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100153',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 37,
            'planned_duration' => 3,
            'planned_start_date' => '2019-4-7',
            'planned_end_date' => '2019-4-9',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100154',
            'name' => 'Side sheel platting',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 37,
            'planned_duration' => 9,
            'planned_start_date' => '2019-4-9',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //155 Block 3 Side Sheel
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100155',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 38,
            'planned_duration' => 10,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100156',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 38,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100157',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 38,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100158',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 38,
            'planned_duration' => 9,
            'planned_start_date' => '2019-3-30',
            'planned_end_date' => '2019-4-7',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100159',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 38,
            'planned_duration' => 3,
            'planned_start_date' => '2019-4-7',
            'planned_end_date' => '2019-4-9',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100160',
            'name' => 'Side sheel platting',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 38,
            'planned_duration' => 9,
            'planned_start_date' => '2019-4-9',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //161 Block 4 Side Sheel
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100161',
            'name' => 'Material preparation',
            'description' => 'Cutting, Shearing, Bending',
            'status' => 1,
            'wbs_id' => 39,
            'planned_duration' => 10,
            'planned_start_date' => '2019-2-22',
            'planned_end_date' => '2019-3-2',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100162',
            'name' => 'Fit-up panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 39,
            'planned_duration' => 14,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-3-13',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100163',
            'name' => 'Welding panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 39,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-14',
            'planned_end_date' => '2019-3-27',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100164',
            'name' => 'Erection panel to building berth',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 39,
            'planned_duration' => 9,
            'planned_start_date' => '2019-3-30',
            'planned_end_date' => '2019-4-7',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100165',
            'name' => 'Inspection panel',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 39,
            'planned_duration' => 3,
            'planned_start_date' => '2019-4-7',
            'planned_end_date' => '2019-4-9',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100166',
            'name' => 'Side sheel platting',
            'description' => 'sub-assembly',
            'status' => 1,
            'wbs_id' => 39,
            'planned_duration' => 9,
            'planned_start_date' => '2019-4-9',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //167 block 5

        //172 block 6

        //178 block 1 main deck

        //183 block 2

        //188 block 3

        //193 block 4

        //198 block 5

        //203 block 6

        //208 block 8

        //213 block 9

        //218 block 7

        //223
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100223',
            'name' => 'Material Preparation',
            'description' => 'cutting, shearing, bending',
            'status' => 1,
            'wbs_id' => 52,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //224
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100224',
            'name' => 'Ladders, step stair & guard railing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //225
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100225',
            'name' => 'Hatch coaming & manhole',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //226
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100226',
            'name' => 'Platform Deck',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100227',
            'name' => 'Bulwark/railing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100228',
            'name' => 'Bollard, smith bracket',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100229',
            'name' => 'Main generator & Harbour generator seating',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100230',
            'name' => 'Vessel name, Draft, Plimsol mark',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 14,
            'planned_start_date' => '2019-3-28',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100234',
            'name' => 'Anodes Sitting',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 53,
            'planned_duration' => 7,
            'planned_start_date' => '2019-4-18',
            'planned_end_date' => '2019-4-24',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //235
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100235',
            'name' => 'Ladders, step stair & guard railing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 54,
            'planned_duration' => 14,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100236',
            'name' => 'Hatch coaming & manhole',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 54,
            'planned_duration' => 14,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100237',
            'name' => 'Platform Deck',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 54,
            'planned_duration' => 14,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100238',
            'name' => 'Bulwark/railing',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 54,
            'planned_duration' => 14,
            'planned_start_date' => '2019-4-4',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100245',
            'name' => 'Anodes',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 54,
            'planned_duration' => 7,
            'planned_start_date' => '2019-4-18',
            'planned_end_date' => '2019-4-24',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //246 Cargo system
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100246',
            'name' => 'Marking & Cutting',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 56,
            'planned_duration' => 15,
            'planned_start_date' => '2019-2-21',
            'planned_end_date' => '2019-3-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100247',
            'name' => 'Wedding spools',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 56,
            'planned_duration' => 15,
            'planned_start_date' => '2019-3-6',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100248',
            'name' => 'Inhouse test spools',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 56,
            'planned_duration' => 9,
            'planned_start_date' => '2019-3-12',
            'planned_end_date' => '2019-3-20',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100249',
            'name' => 'Fit-up spools on board',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 56,
            'planned_duration' => 21,
            'planned_start_date' => '2019-3-21',
            'planned_end_date' => '2019-4-10',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100250',
            'name' => 'Welding spools on board',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 56,
            'planned_duration' => 14,
            'planned_start_date' => '2019-4-1',
            'planned_end_date' => '2019-4-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100251',
            'name' => 'Connection to pump system',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 56,
            'planned_duration' => 7,
            'planned_start_date' => '2019-4-11',
            'planned_end_date' => '2019-4-17',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100252',
            'name' => 'Testing on board',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 56,
            'planned_duration' => 7,
            'planned_start_date' => '2019-4-18',
            'planned_end_date' => '2019-4-24',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //253 General Service

        //260 Bilge

        //267 Emergency Fire Fighting System

        //274 Freshwater

        //281 Fuel Oil System

        //288 Holding tank

        //295 Air Compressor

        //302 CO2 fixed system

        //309 Electric Installation
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100309',
            'name' => 'Marking, Fit-up and welding cable coaming & tray',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 66,
            'planned_duration' => 12,
            'planned_start_date' => '2019-3-1',
            'planned_end_date' => '2019-3-12',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100310',
            'name' => 'Cable laying',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 66,
            'planned_duration' => 13,
            'planned_start_date' => '2019-3-14',
            'planned_end_date' => '2019-3-26',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100311',
            'name' => 'Install Distribution Box and MSB',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 66,
            'planned_duration' => 13,
            'planned_start_date' => '2019-3-14',
            'planned_end_date' => '2019-3-26',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //318
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100318',
            'name' => 'Fit-up/Leveling sitting main generator set and harbour generator',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 67,
            'planned_duration' => 30,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-4-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100319',
            'name' => 'Installation of Diesel Generator Set & Harbour generator',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 67,
            'planned_duration' => 30,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-4-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100320',
            'name' => 'Fit-up / Leveling sitting windlass',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 67,
            'planned_duration' => 30,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-4-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100321',
            'name' => 'Installation windlass',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 67,
            'planned_duration' => 30,
            'planned_start_date' => '2019-3-7',
            'planned_end_date' => '2019-4-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //322 Coating
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100322',
            'name' => 'Material and Surface preparation',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 68,
            'planned_duration' => 46,
            'planned_start_date' => '2019-2-21',
            'planned_end_date' => '2019-4-6',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100323',
            'name' => 'Internal Hull',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 68,
            'planned_duration' => 71,
            'planned_start_date' => '2019-2-28',
            'planned_end_date' => '2019-5-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100324',
            'name' => 'External Hull',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 68,
            'planned_duration' => 9,
            'planned_start_date' => '2019-4-13',
            'planned_end_date' => '2019-4-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //327 Interior
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100327',
            'name' => 'Flooring preparation & installation',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 69,
            'planned_duration' => 15,
            'planned_start_date' => '2019-4-24',
            'planned_end_date' => '2019-5-8',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100328',
            'name' => 'making, fitup partition & ceiling',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 69,
            'planned_duration' => 10,
            'planned_start_date' => '2019-5-6',
            'planned_end_date' => '2019-5-15',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100329',
            'name' => 'making, fitup & install furniture in accomodation room',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 69,
            'planned_duration' => 13,
            'planned_start_date' => '2019-5-8',
            'planned_end_date' => '2019-5-21',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //330 Testing
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100330',
            'name' => 'Load Test generator set & MSB',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 71,
            'planned_duration' => 6,
            'planned_start_date' => '2019-4-30',
            'planned_end_date' => '2019-5-5',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100331',
            'name' => 'Pumps System',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 71,
            'planned_duration' => 11,
            'planned_start_date' => '2019-5-4',
            'planned_end_date' => '2019-5-14',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100332',
            'name' => 'Windlass',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 71,
            'planned_duration' => 8,
            'planned_start_date' => '2019-5-4',
            'planned_end_date' => '2019-5-11',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //338 Delivery
        DB::table('pro_activity')->insert([
            'code' => 'ACT1810100338',
            'name' => 'Handover statement (BAST)',
            'description' => '-',
            'status' => 1,
            'wbs_id' => 72,
            'planned_duration' => 7,
            'planned_start_date' => '2019-5-22',
            'planned_end_date' => '2019-5-28',
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //200
        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200001',
        //     'name' => 'DUMMY - Mengelas 01',
        //     'description' => 'DUMMY - Mengelas 01',
        //     'status' => 1,
        //     'wbs_id' => 75,
        //     'planned_duration' => 6,
        //     'planned_start_date' => '2018-12-29',
        //     'planned_end_date' => '2019-1-3',
        //     'weight' => 12.5,
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);

        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200002',
        //     'name' => 'DUMMY - Bending 01',
        //     'description' => 'DUMMY - Bending 01',
        //     'status' => 1,
        //     'wbs_id' => 75,
        //     'planned_duration' => 5,
        //     'planned_start_date' => '2019-1-4',
        //     'planned_end_date' => '2019-1-8',
        //     'weight' => 12.5,
        //     'predecessor' => '[205]',
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);

        //207
        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200003',
        //     'name' => 'DUMMY - Mengelas 02',
        //     'description' => 'DUMMY - Mengelas 02',
        //     'status' => 1,
        //     'wbs_id' => 76,
        //     'planned_duration' => 8,
        //     'planned_start_date' => '2019-1-1',
        //     'planned_end_date' => '2019-1-8',
        //     'weight' => 10,
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);

        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200004',
        //     'name' => 'DUMMY - Bending 02',
        //     'description' => 'DUMMY - Bending 02',
        //     'status' => 1,
        //     'wbs_id' => 76,
        //     'planned_duration' => 3,
        //     'planned_start_date' => '2019-1-7',
        //     'planned_end_date' => '2019-1-9',
        //     'weight' => 5,
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);

        //209
        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200005',
        //     'name' => 'DUMMY - Mengelas 03',
        //     'description' => 'DUMMY - Mengelas 03',
        //     'status' => 1,
        //     'wbs_id' => 77,
        //     'planned_duration' => 20,
        //     'planned_start_date' => '2018-12-25',
        //     'planned_end_date' => '2019-1-13',
        //     'weight' => 9,
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);

        //210
        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200006',
        //     'name' => 'DUMMY - 01',
        //     'description' => 'DUMMY - 01',
        //     'status' => 1,
        //     'wbs_id' => 78,
        //     'planned_duration' => 6,
        //     'planned_start_date' => '2019-1-15',
        //     'planned_end_date' => '2019-1-20',
        //     'weight' => 20,
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);

        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200007',
        //     'name' => 'DUMMY - 02',
        //     'description' => 'DUMMY - 02',
        //     'status' => 1,
        //     'wbs_id' => 78,
        //     'planned_duration' => 3,
        //     'planned_start_date' => '2019-1-21',
        //     'planned_end_date' => '2019-1-23',
        //     'weight' => 5,
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);

        // DB::table('pro_activity')->insert([
        //     'code' => 'ACT1810200008',
        //     'name' => 'DUMMY - 03',
        //     'description' => 'DUMMY - 03',
        //     'status' => 1,
        //     'wbs_id' => 79,
        //     'planned_duration' => 5,
        //     'planned_start_date' => '2019-1-24',
        //     'planned_end_date' => '2019-1-28',
        //     'weight' => 25,
        //     'user_id' => 5,
        //     'branch_id' => 1,
        // ]);
    }
}
