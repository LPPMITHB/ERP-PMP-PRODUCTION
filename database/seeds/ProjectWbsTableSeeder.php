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
            'code' => 'WBS18010001',
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
            'code' => 'WBS18010002',
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
            'code' => 'WBS18010003',
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
            'code' => 'WBS18010004',
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
            'code' => 'WBS18010005',
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
            'code' => 'WBS18010006',
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
            'code' => 'WBS18010007',
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
            'code' => 'WBS18010008',
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
            'code' => 'WBS18010009',
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
            'code' => 'WBS18010010',
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
            'code' => 'WBS18010011',
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
            'code' => 'WBS18010012',
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
            'code' => 'WBS18010013',
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
            'code' => 'WBS18010014',
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
            'code' => 'WBS18010015',
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
            'code' => 'WBS18010016',
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
            'code' => 'WBS18010017',
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
            'code' => 'WBS18010018',
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
            'code' => 'WBS18010019',
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
            'code' => 'WBS18010020',
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
            'code' => 'WBS18010036',
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
            'code' => 'WBS18010037',
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
            'code' => 'WBS18010038',
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
            'code' => 'WBS18010039',
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
            'code' => 'WBS18010040',
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
            'code' => 'WBS18010041',
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
            'code' => 'WBS18010042',
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
            'code' => 'WBS18010043',
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
            'code' => 'WBS18010044',
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
            'code' => 'WBS18010046',
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
            'code' => 'WBS18010047',
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
            'code' => 'WBS18010048',
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
            'code' => 'WBS18010049',
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
            'code' => 'WBS18010050',
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
            'code' => 'WBS18010051',
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
            'code' => 'WBS18010052',
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
            'code' => 'WBS18010053',
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
            'code' => 'WBS18010054',
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
            'code' => 'WBS18010055',
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
            'code' => 'WBS18010056',
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
            'code' => 'WBS18010057',
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
            'code' => 'WBS18010058',
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
            'code' => 'WBS18010059',
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
            'code' => 'WBS18010060',
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
            'code' => 'WBS18010061',
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
            'code' => 'WBS18010062',
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
            'code' => 'WBS18010063',
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
            'code' => 'WBS18010064',
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
            'code' => 'WBS18010065',
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
            'code' => 'WBS18010066',
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
            'code' => 'WBS18010067',
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
            'code' => 'WBS18010068',
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
            'code' => 'WBS18010069',
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
            'code' => 'WBS18010070',
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
            'code' => 'WBS18010071',
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
            'code' => 'WBS18010072',
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
            'code' => 'WBS18010073',
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
            'code' => 'WBS18010074',
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
            'code' => 'WBS18010075',
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
            'code' => 'WBS18010076',
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
            'code' => 'WBS18010077',
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
            'code' => 'WBS18010078',
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
            'code' => 'WBS18010021',
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
            'code' => 'WBS18010079',
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
            'code' => 'WBS18010080',
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
            'code' => 'WBS18010081',
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
            'code' => 'WBS18010082',
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
            'code' => 'WBS18010083',
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
            'code' => 'WBS18010084',
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
            'code' => 'WBS18010085',
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
            'code' => 'WBS18010086',
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
            'code' => 'WBS18010087',
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

    }
}
