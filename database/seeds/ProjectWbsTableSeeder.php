<?php

use Illuminate\Database\Seeder;

class ProjectWbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010001',
            'name' => 'CONTRACT SIGN',
            'description' => '',
            'deliverables' => 'Level 1', 
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2018-12-29',
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
        ]); 

        //2
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010002',
            'name' => 'APPROVED DESIGN, SPECIFICATION & SHIP DOCUMENT',
            'description' => '',
            'deliverables' => 'Level 1', 
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2018-12-29',
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
        ]); 

        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010003',
            'name' => 'Design Drawings & Submission',
            'description' => '',
            'deliverables' => 'Level 2',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-1-31',
            'progress' => 0,
            'wbs_id' => 2,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010004',
            'name' => 'Distribution DWG to stakeholder',
            'description' => '',
            'deliverables' => 'Level 2',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-5-28',
            'progress' => 0,
            'wbs_id' => 2,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010005',
            'name' => 'Procurement Process',
            'description' => '',
            'deliverables' => 'Level 1',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-10',
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //6
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010006',
            'name' => 'Production Process',
            'description' => '',
            'deliverables' => 'Level 1',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-5-21',
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //7
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010007',
            'name' => 'Hull Structure',
            'description' => '',
            'deliverables' => 'Level 2',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-5-21',
            'progress' => 0,
            'wbs_id' => 6,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //8
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010008',
            'name' => 'Bottom',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-2',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //9
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010009',
            'name' => 'Transom',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-2-26',
            'progress' => 0,
            'wbs_id' => 8,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //10
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010010',
            'name' => 'Blok 1 (Fr. 0-15)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-2',
            'progress' => 0,
            'wbs_id' => 8,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //11
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010011',
            'name' => 'Master Block 2 (frame 15-21)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-2',
            'progress' => 0,
            'wbs_id' => 8,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //12
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010012',
            'name' => 'Block 3 (frame 21-25)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-2',
            'progress' => 0,
            'wbs_id' => 8,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //13
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010013',
            'name' => 'Block 4 (frame 25-30)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-2',
            'progress' => 0,
            'wbs_id' => 8,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //14
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010014',
            'name' => 'Block 5 (frame 30-34)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-2',
            'progress' => 0,
            'wbs_id' => 8,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //15
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010015',
            'name' => 'Block 6 (frame 34-43)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-2',
            'progress' => 0,
            'wbs_id' => 8,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //16
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010016',
            'name' => 'Tank top',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-8',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //17
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010017',
            'name' => 'Blok 1 (Fr. 0-15)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-8',
            'progress' => 0,
            'wbs_id' => 16,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //18
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010018',
            'name' => 'Master Block 2 (Fr. 15-21)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-8',
            'progress' => 0,
            'wbs_id' => 16,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010019',
            'name' => 'Block 3 (Fr. 21-25)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-8',
            'progress' => 0,
            'wbs_id' => 16,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010020',
            'name' => 'Block 4 (Fr. 25-30)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-8',
            'progress' => 0,
            'wbs_id' => 16,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010036',
            'name' => 'Block 5 (Fr. 30-34)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-8',
            'progress' => 0,
            'wbs_id' => 16,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010037',
            'name' => 'Block 6 (Fr. 34-40)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-8',
            'progress' => 0,
            'wbs_id' => 16,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //23
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010038',
            'name' => 'Transbulkhead',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //24
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010039',
            'name' => 'Blok 1 (Fr. 0-15)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 23,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010040',
            'name' => 'Master Block 2 (Fr. 15-21)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 23,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010041',
            'name' => 'Block 3 (Fr. 21-25)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 23,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010042',
            'name' => 'Block 4 (Fr. 25-30)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 23,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010043',
            'name' => 'Block 6 (Fr. 34-40)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 23,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //49
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010044',
            'name' => 'Longbulkhead',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010046',
            'name' => 'Master Block 2 (Fr. 15-21)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 29,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010047',
            'name' => 'Block 3 (Fr. 21-25)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 29,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010048',
            'name' => 'Block 4 (Fr. 25-30)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 29,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010049',
            'name' => 'Block 5 (Fr. 30-34)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 29,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010050',
            'name' => 'Block 6 (Fr. 34-40)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-3',
            'progress' => 0,
            'wbs_id' => 29,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //35
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010051',
            'name' => 'Side sheel',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //36
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010052',
            'name' => 'Blok 1 (Fr. 0-15)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 35,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010053',
            'name' => 'Master Block 2 (Fr. 15-21)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 35,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010054',
            'name' => 'Block 3 (Fr. 21-25)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 35,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010055',
            'name' => 'Block 4 (Fr. 25-30)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 35,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010056',
            'name' => 'Block 5 (Fr. 30-34)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 35,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010057',
            'name' => 'Block 6 (Fr. 34-40)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 35,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //62
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010058',
            'name' => 'Main deck',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010059',
            'name' => 'Blok 1 (Fr. 0-15)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010060',
            'name' => 'Master Block 2 (Fr. 15-21)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010061',
            'name' => 'Block 3 (Fr. 21-25)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010062',
            'name' => 'Block 4 (Fr. 25-30)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010063',
            'name' => 'Block 5 (Fr. 30-34)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010064',
            'name' => 'Block 6 (Fr. 34-40)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-17',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010065',
            'name' => 'Block 8 (deck house)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-13',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010066',
            'name' => 'Block 9 (winch house)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-13',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010067',
            'name' => 'Block 7 (skeg)',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-9',
            'progress' => 0,
            'wbs_id' => 42,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //52
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010068',
            'name' => 'Outfitting Hull',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //73
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010069',
            'name' => 'Fabrication',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 52,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //74
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010070',
            'name' => 'Installation',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 52,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //55
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010071',
            'name' => 'Piping & Safety System',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //56
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010072',
            'name' => 'Cargo System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010073',
            'name' => 'General Service & Fire Fighting System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //78
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010074',
            'name' => 'Bilge & OWS System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //79
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010075',
            'name' => 'Emergency Fire Fighting System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //80
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010076',
            'name' => 'Freshwater & Sea Water System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010077',
            'name' => 'Fuel Oil System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);
    
        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010078',
            'name' => 'Holding Tank & Sewage System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010021',
            'name' => 'Air Compressor & Air Pressure',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010079',
            'name' => 'CO2 Fixed System',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 55,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //85
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010080',
            'name' => 'Electric & Mechanic',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //86
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010081',
            'name' => 'Electric Installation',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-24',
            'progress' => 0,
            'wbs_id' => 65,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //87
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010082',
            'name' => 'Mechanic Installation',
            'description' => '',
            'deliverables' => 'Level 4',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-6',
            'progress' => 0,
            'wbs_id' => 65,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //88
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010083',
            'name' => 'Coating',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-5-8',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //89
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010084',
            'name' => 'Interior and Furniture',
            'description' => '',
            'deliverables' => 'Level 3',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-5-21',
            'progress' => 0,
            'wbs_id' => 7,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //90
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010085',
            'name' => 'Launching',
            'description' => '',
            'deliverables' => 'Level 1',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-4-27',
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //91
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010086',
            'name' => 'Testing Commisioning and Familirisasion',
            'description' => '',
            'deliverables' => 'Level 1',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-5-15',
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
        ]);

        //92
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181010087',
            'name' => 'DELIVERY',
            'description' => '',
            'deliverables' => 'Level 1',
            'project_id' => 1,
            'status' => 1,
            'planned_deadline' => '2019-5-28',
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
        ]);
        
        //73
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181020001',
            'name' => 'DUMMY - Hull',
            'description' => 'DUMMY',
            'deliverables' => 'Hull',
            'project_id' => 2,
            'status' => 1,
            'planned_deadline' => '2019-1-15',
            'weight' => 50,
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        //74
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181020002',
            'name' => 'DUMMY - Outfitting',
            'description' => 'DUMMY',
            'deliverables' => 'Outfitting',
            'project_id' => 2,
            'status' => 1,
            'planned_deadline' => '2019-1-22',
            'weight' => 50,
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        //75
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181020003',
            'name' => 'DUMMY - Lambung',
            'description' => 'DUMMY',
            'deliverables' => 'Lambung',
            'project_id' => 2,
            'wbs_id' => 73,
            'status' => 1,
            'planned_deadline' => '2019-1-8',
            'weight' => 25,
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('pro_wbs')->insert([
            'code' => 'WBS181020004',
            'name' => 'DUMMY - Portside',
            'description' => 'DUMMY',
            'deliverables' => 'Portside',
            'project_id' => 2,
            'wbs_id' => 73,
            'status' => 1,
            'planned_deadline' => '2019-1-10',
            'weight' => 15,
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        //77
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181020005',
            'name' => 'DUMMY - Bulbous Bow',
            'description' => 'DUMMY',
            'deliverables' => 'Bulbous Bow',
            'project_id' => 2,
            'wbs_id' => 73,
            'status' => 1,
            'planned_deadline' => '2019-1-14',
            'weight' => 10,
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        //78
        DB::table('pro_wbs')->insert([
            'code' => 'WBS181020006',
            'name' => 'DUMMY - Fabrication',
            'description' => 'DUMMY',
            'deliverables' => 'Fabrication',
            'project_id' => 2,
            'wbs_id' => 74,
            'status' => 1,
            'planned_deadline' => '2019-1-25',
            'weight' => 25,
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);

        DB::table('pro_wbs')->insert([
            'code' => 'WBS181020007',
            'name' => 'DUMMY - Installation',
            'description' => 'DUMMY',
            'deliverables' => 'Installation',
            'project_id' => 2,
            'wbs_id' => 74,
            'status' => 1,
            'planned_deadline' => '2019-1-28',
            'weight' => 25,
            'progress' => 0,
            'user_id' => 5,
            'branch_id' => 1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
    }
}
