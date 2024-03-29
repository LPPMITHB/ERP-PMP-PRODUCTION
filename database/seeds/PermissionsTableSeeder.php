<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PICA
        $managePica = Menu::where('name', 'PICA')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Pica',
            'menu_id' => $managePica,
            'middleware' => 'list-pica',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Pica',
            'menu_id' => $managePica,
            'middleware' => 'create-pica',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Pica',
            'menu_id' => $managePica,
            'middleware' => 'show-pica',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Pica',
            'menu_id' => $managePica,
            'middleware' => 'edit-pica',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Pica',
            'menu_id' => $managePica,
            'middleware' => 'delete-pica',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Reverse Transaction
        $reverseTransaction = Menu::where('name', 'Reverse Transaction')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Reverse Transaction',
            'menu_id' => $reverseTransaction,
            'middleware' => 'list-reverse-transaction',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Reverse Transaction',
            'menu_id' => $reverseTransaction,
            'middleware' => 'create-reverse-transaction',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Reverse Transaction',
            'menu_id' => $reverseTransaction,
            'middleware' => 'show-reverse-transaction',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Reverse Transaction',
            'menu_id' => $reverseTransaction,
            'middleware' => 'edit-reverse-transaction',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Approve Reverse Transaction',
            'menu_id' => $reverseTransaction,
            'middleware' => 'approve-reverse-transaction',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);


        //Dashboard
        $dashboard = Menu::where('name', 'Dashboard')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Show Dashboard',
            'menu_id' => $dashboard,
            'middleware' => 'show-dashboard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Project
        $manageProject = Menu::where('name', 'Manage Projects')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Project',
            'menu_id' => $manageProject,
            'middleware' => 'list-project',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Project',
            'menu_id' => $manageProject,
            'middleware' => 'create-project',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Project',
            'menu_id' => $manageProject,
            'middleware' => 'show-project',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Project',
            'menu_id' => $manageProject,
            'middleware' => 'edit-project',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Project',
            'menu_id' => $manageProject,
            'middleware' => 'delete-project',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // WBS Images
        $menu_manage_wbs_images = Menu::where('route_name', 'wbs.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Wbs Images',
            'menu_id' => $menu_manage_wbs_images,
            'middleware' => 'manage-wbs-images',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // WBS Profile
        $manageWbsProfile = Menu::where('name', 'Manage WBS Profile')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Wbs Profile',
            'menu_id' => $manageWbsProfile,
            'middleware' => 'manage-wbs-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Manage Activity Profile',
            'menu_id' => $manageWbsProfile,
            'middleware' => 'manage-activity-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Manage Bom Profile',
            'menu_id' => $manageWbsProfile,
            'middleware' => 'manage-bom-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Manage Resource Profile',
            'menu_id' => $manageWbsProfile,
            'middleware' => 'manage-resource-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Project Repair
        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $projectManagementRepair =  Menu::where('name', 'Project Management')->where('menu_id', $repair)->select('id')->first()->id;
        $manageProjectRepair = Menu::where('name', 'Manage Projects')->where('menu_id', $projectManagementRepair)->select('id')->first()->id;

        DB::table('permissions')->insert([
            'name' => 'List Project',
            'menu_id' => $manageProjectRepair,
            'middleware' => 'list-project-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Project',
            'menu_id' => $manageProjectRepair,
            'middleware' => 'create-project-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Project',
            'menu_id' => $manageProjectRepair,
            'middleware' => 'show-project-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Project',
            'menu_id' => $manageProjectRepair,
            'middleware' => 'edit-project-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Project',
            'menu_id' => $manageProjectRepair,
            'middleware' => 'delete-project-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // WBS Profile Repair
        // $manageWbsProfileRepair = Menu::where('name','Manage WBS Profile')->where('menu_id',$projectManagementRepair)->select('id')->first()->id;
        // DB::table('permissions')->insert([
        //     'name' => 'Manage Wbs Profile Repair',
        //     'menu_id' => $manageWbsProfileRepair,
        //     'middleware' => 'manage-wbs-profile-repair',
        //     'created_at' => date('Y-m-d'),
        //     'updated_at' => date('Y-m-d'),
        // ]);

        // DB::table('permissions')->insert([
        //     'name' => 'Manage Activity Profile Repair',
        //     'menu_id' => $manageWbsProfileRepair,
        //     'middleware' => 'manage-activity-profile-repair',
        //     'created_at' => date('Y-m-d'),
        //     'updated_at' => date('Y-m-d'),
        // ]);

        // DB::table('permissions')->insert([
        //     'name' => 'Manage Bom Profile Repair',
        //     'menu_id' => $manageWbsProfileRepair,
        //     'middleware' => 'manage-bom-profile-repair',
        //     'created_at' => date('Y-m-d'),
        //     'updated_at' => date('Y-m-d'),
        // ]);

        // DB::table('permissions')->insert([
        //     'name' => 'Manage Resource Profile Repair',
        //     'menu_id' => $manageWbsProfileRepair,
        //     'middleware' => 'manage-resource-profile-repair',
        //     'created_at' => date('Y-m-d'),
        //     'updated_at' => date('Y-m-d'),
        // ]);

        // Project Standard Repair
        $manageProjectStandard = Menu::where('name', 'Manage Project Standard')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Project Standard',
            'menu_id' => $manageProjectStandard,
            'middleware' => 'manage-project-standard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //BOM
        $viewBOM = Menu::where('route_name','bom.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Bom',
            'menu_id' => $viewBOM,
            'middleware' => 'list-bom',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Bom',
            'menu_id' => $viewBOM,
            'middleware' => 'show-bom',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $manageBOM = Menu::where('route_name','bom.indexProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Bom',
            'menu_id' => $manageBOM,
            'middleware' => 'create-bom',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        
        DB::table('permissions')->insert([
            'name' => 'Edit Bom',
            'menu_id' => $manageBOM,
            'middleware' => 'edit-bom',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Confirm Bom',
            'menu_id' => $manageBOM,
            'middleware' => 'confirm-bom',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_material_requirement_summmary = Menu::where('route_name','bom.selectProjectSum')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Material Requirement Summary',
            'menu_id' => $menu_material_requirement_summmary,
            'middleware' => 'manage-material-requirement-summary',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //BOM Repair
        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $bomRepair =  Menu::where('name', 'Bill of Material')->where('menu_id', $repair)->select('id')->first()->id;
        $manageBOMRepair = Menu::where('name', 'Manage BOM / BOS')->where('menu_id', $bomRepair)->select('id')->first()->id;
        $viewBOMRepair = Menu::where('name', 'View BOM')->where('menu_id', $bomRepair)->select('id')->first()->id;

        DB::table('permissions')->insert([
            'name' => 'List Bom Repair',
            'menu_id' => $viewBOMRepair,
            'middleware' => 'list-bom-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Manage Bom Repair',
            'menu_id' => $manageBOMRepair,
            'middleware' => 'create-bom-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Bom Repair',
            'menu_id' => $viewBOMRepair,
            'middleware' => 'show-bom-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Bom Repair',
            'menu_id' => $manageBOMRepair,
            'middleware' => 'edit-bom-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Confirm Bom Repair',
            'menu_id' => $manageBOMRepair,
            'middleware' => 'confirm-bom-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //RAP
        $viewRAP = Menu::where('name', 'Manage RAP')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Rap',
            'menu_id' => $viewRAP,
            'middleware' => 'list-rap',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Rap',
            'menu_id' => $viewRAP,
            'middleware' => 'show-rap',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Rap',
            'menu_id' => $viewRAP,
            'middleware' => 'edit-rap',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // create other cost
        $createOtherCost = Menu::where('name', 'Create Other Cost')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Other Cost',
            'menu_id' => $createOtherCost,
            'middleware' => 'create-other-cost',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // approve other cost
        $menu_approve_other_cost = Menu::where('route_name', 'rap.selectProjectPlanOtherCost')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Other Cost',
            'menu_id' => $menu_approve_other_cost,
            'middleware' => 'approve-other-cost',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // create actual other cost
        $inputActualOtherCost = Menu::where('name', 'Input Actual Other Cost')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Input Actual Other Cost',
            'menu_id' => $inputActualOtherCost,
            'middleware' => 'create-actual-other-cost',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // view planned cost
        $viewPlannedCost = Menu::where('name', 'View Planned Cost')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Planned Cost',
            'menu_id' => $viewPlannedCost,
            'middleware' => 'view-planned-cost',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // view material remaining
        $viewRemainingMaterial = Menu::where('name', 'View Remaining Material')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Remaining Material',
            'menu_id' => $viewRemainingMaterial,
            'middleware' => 'view-remaining-material',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $costPlanRepair =  Menu::where('name', 'Cost Plan')->where('menu_id', $repair)->select('id')->first()->id;
        //RAP repair
        $manageRAPRepair = Menu::where('name', 'Manage RAP')->where('menu_id', $costPlanRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Rap Repair',
            'menu_id' => $manageRAPRepair,
            'middleware' => 'list-rap-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Rap Repair',
            'menu_id' => $manageRAPRepair,
            'middleware' => 'show-rap-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Rap Repair',
            'menu_id' => $manageRAPRepair,
            'middleware' => 'edit-rap-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // create other cost repair
        $createOtherCost = Menu::where('name', 'Create Other Cost')->where('menu_id', $costPlanRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Other Cost Repair',
            'menu_id' => $createOtherCost,
            'middleware' => 'create-other-cost-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // create actual other cost repair
        $inputActualOtherCost = Menu::where('name', 'Input Actual Other Cost')->where('menu_id', $costPlanRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Input Actual Other Cost Repair',
            'menu_id' => $inputActualOtherCost,
            'middleware' => 'create-actual-other-cost-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // view planned cost repair
        $viewPlannedCost = Menu::where('name', 'View Planned Cost')->where('menu_id', $costPlanRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Planned Cost Repair',
            'menu_id' => $viewPlannedCost,
            'middleware' => 'view-planned-cost-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // view material remaining repair
        $viewRemainingMaterial = Menu::where('name', 'View Remaining Material')->where('menu_id', $costPlanRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Remaining Material Repair',
            'menu_id' => $viewRemainingMaterial,
            'middleware' => 'view-remaining-material-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Work Request
        $createWR = Menu::where('name', 'Create WR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Work Request',
            'menu_id' => $createWR,
            'middleware' => 'create-work-request',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveWR = Menu::where('name', 'View & Edit WR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Work Request',
            'menu_id' => $approveWR,
            'middleware' => 'approve-work-request',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewWR = Menu::where('name', 'View & Edit WR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Work Request',
            'menu_id' => $viewWR,
            'middleware' => 'list-work-request',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Work Request',
            'menu_id' => $viewWR,
            'middleware' => 'show-work-request',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Work Request',
            'menu_id' => $viewWR,
            'middleware' => 'edit-work-request',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Work Order
        $createWO = Menu::where('name', 'Create WO')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Work Order',
            'menu_id' => $createWO,
            'middleware' => 'create-work-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveWO = Menu::where('name', 'View & Edit WO')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Work Order',
            'menu_id' => $approveWO,
            'middleware' => 'approve-work-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewWO = Menu::where('name', 'View & Edit WO')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Work Order',
            'menu_id' => $viewWO,
            'middleware' => 'list-work-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Work Order',
            'menu_id' => $viewWO,
            'middleware' => 'show-work-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Work Order',
            'menu_id' => $viewWO,
            'middleware' => 'edit-work-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Work Order Repair
        $wipRepair =  Menu::where('name', 'WIP')->where('menu_id', $repair)->select('id')->first()->id;
        $woRepair = Menu::where('name', 'Work Order')->where('menu_id', $wipRepair)->select('id')->first()->id;
        $createWO = Menu::where('name', 'Create WO')->where('menu_id', $woRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Work Order',
            'menu_id' => $createWO,
            'middleware' => 'create-work-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveWO = Menu::where('name', 'View & Edit WO')->where('menu_id', $woRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Work Order',
            'menu_id' => $approveWO,
            'middleware' => 'approve-work-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewWO = Menu::where('name', 'View & Edit WO')->where('menu_id', $woRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Work Order',
            'menu_id' => $viewWO,
            'middleware' => 'list-work-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Work Order',
            'menu_id' => $viewWO,
            'middleware' => 'show-work-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Work Order',
            'menu_id' => $viewWO,
            'middleware' => 'edit-work-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Work Request Repair
        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $wipRepair =  Menu::where('name', 'WIP')->where('menu_id', $repair)->select('id')->first()->id;
        $wrRepair = Menu::where('name', 'Work Request')->where('menu_id', $wipRepair)->select('id')->first()->id;
        $createWRRepair = Menu::where('name', 'Create WR')->where('menu_id', $wrRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Work Request',
            'menu_id' => $createWRRepair,
            'middleware' => 'create-work-request-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveWRRepair = Menu::where('name', 'Approve WR')->where('menu_id', $wrRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Work Request',
            'menu_id' => $approveWRRepair,
            'middleware' => 'approve-work-request-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewWRRepair = Menu::where('name', 'View & Edit WR')->where('menu_id', $wrRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Work Request',
            'menu_id' => $viewWRRepair,
            'middleware' => 'list-work-request-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Work Request',
            'menu_id' => $viewWRRepair,
            'middleware' => 'show-work-request-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Work Request',
            'menu_id' => $viewWRRepair,
            'middleware' => 'edit-work-request-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);


        //Purchase Requisition
        $createPR = Menu::where('name', 'Create PR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Purchase Requisition',
            'menu_id' => $createPR,
            'middleware' => 'create-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewPR = Menu::where('name', 'View & Edit PR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Purchase Requisition',
            'menu_id' => $viewPR,
            'middleware' => 'list-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Purchase Requisition',
            'menu_id' => $viewPR,
            'middleware' => 'show-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Purchase Requisition',
            'menu_id' => $viewPR,
            'middleware' => 'edit-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Purchase Requisition',
            'menu_id' => $viewPR,
            'middleware' => 'cancel-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Approval Purchase Requisition',
            'menu_id' => $viewPR,
            'middleware' => 'cancel-approval-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approvePR = Menu::where('name', 'Approve PR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Purchase Requisition',
            'menu_id' => $approvePR,
            'middleware' => 'approve-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $consolidationPR = Menu::where('name', 'PR Consolidation')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Consolidation Purchase Requisition',
            'menu_id' => $consolidationPR,
            'middleware' => 'consolidation-purchase-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Purchase Requisition Repair
        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $materialManagementRepair =  Menu::where('name', 'Material Management')->where('menu_id', $repair)->select('id')->first()->id;
        $prRepair = Menu::where('name', 'Purchase Requisition')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        $createPrRepair = Menu::where('name', 'Create PR')->where('menu_id', $prRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Purchase Requisition Repair',
            'menu_id' => $createPrRepair,
            'middleware' => 'create-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewPrRepair = Menu::where('name', 'View & Edit PR')->where('menu_id', $prRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Purchase Requisition Repair',
            'menu_id' => $viewPrRepair,
            'middleware' => 'list-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Purchase Requisition Repair',
            'menu_id' => $viewPrRepair,
            'middleware' => 'show-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Purchase Requisition Repair',
            'menu_id' => $viewPrRepair,
            'middleware' => 'edit-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Purchase Requisition Repair',
            'menu_id' => $viewPrRepair,
            'middleware' => 'cancel-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Approval Purchase Requisition Repair',
            'menu_id' => $viewPrRepair,
            'middleware' => 'cancel-approval-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approvePrRepair = Menu::where('name', 'Approve PR')->where('menu_id', $prRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Purchase Requisition Repair',
            'menu_id' => $approvePrRepair,
            'middleware' => 'approve-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $consolidationPrRepair = Menu::where('name', 'PR Consolidation')->where('menu_id', $prRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Consolidation Purchase Requisition Repair',
            'menu_id' => $consolidationPrRepair,
            'middleware' => 'consolidation-purchase-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Material Requisition
        $createMR = Menu::where('name', 'Create MR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Material Requisition',
            'menu_id' => $createMR,
            'middleware' => 'create-material-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveMR = Menu::where('name', 'Approve MR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Material Requisition',
            'menu_id' => $approveMR,
            'middleware' => 'approve-material-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewMR = Menu::where('name', 'View & Edit MR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Material Requisition',
            'menu_id' => $viewMR,
            'middleware' => 'list-material-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Material Requisition',
            'menu_id' => $viewMR,
            'middleware' => 'show-material-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Material Requisition',
            'menu_id' => $viewMR,
            'middleware' => 'edit-material-requisition',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $materialManagementRepair =  Menu::where('name', 'Material Management')->where('menu_id', $repair)->select('id')->first()->id;
        $mrRepair = Menu::where('name', 'Material Requisition')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;

        //Material Requisition Repair
        $createMRRepair = Menu::where('name', 'Create MR')->where('menu_id', $mrRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Material Requisition',
            'menu_id' => $createMRRepair,
            'middleware' => 'create-material-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveMRRepair = Menu::where('name', 'Approve MR')->where('menu_id', $mrRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Material Requisition',
            'menu_id' => $approveMRRepair,
            'middleware' => 'approve-material-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewMRRepair = Menu::where('name', 'View & Edit MR')->where('menu_id', $mrRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Material Requisition',
            'menu_id' => $viewMRRepair,
            'middleware' => 'list-material-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Material Requisition',
            'menu_id' => $viewMRRepair,
            'middleware' => 'show-material-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Material Requisition',
            'menu_id' => $viewMRRepair,
            'middleware' => 'edit-material-requisition-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Purchase Order
        $createPO = Menu::where('name', 'Create PO')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Purchase Order',
            'menu_id' => $createPO,
            'middleware' => 'create-purchase-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewPO = Menu::where('name', 'View & Edit PO')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Purchase Order',
            'menu_id' => $viewPO,
            'middleware' => 'list-purchase-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Purchase Order',
            'menu_id' => $viewPO,
            'middleware' => 'show-purchase-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Purchase Order',
            'menu_id' => $viewPO,
            'middleware' => 'edit-purchase-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Purchase Order',
            'menu_id' => $viewPO,
            'middleware' => 'cancel-purchase-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Approval Purchase Order',
            'menu_id' => $viewPO,
            'middleware' => 'cancel-approval-purchase-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approvePO = Menu::where('name', 'Approve PO')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Purchase Order',
            'menu_id' => $approvePO,
            'middleware' => 'approve-purchase-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Purchase Order Repair
        $poRepair = Menu::where('name', 'Purchase Order')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        $createPO = Menu::where('name', 'Create PO')->where('menu_id', $poRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Purchase Order Repair',
            'menu_id' => $createPO,
            'middleware' => 'create-purchase-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewPO = Menu::where('name', 'View & Edit PO')->where('menu_id', $poRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Purchase Order Repair',
            'menu_id' => $viewPO,
            'middleware' => 'list-purchase-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Purchase Order Repair',
            'menu_id' => $viewPO,
            'middleware' => 'show-purchase-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Purchase Order Repair',
            'menu_id' => $viewPO,
            'middleware' => 'edit-purchase-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Purchase Order Repair',
            'menu_id' => $viewPO,
            'middleware' => 'cancel-purchase-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Approval Purchase Order Repair',
            'menu_id' => $viewPO,
            'middleware' => 'cancel-approval-purchase-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approvePO = Menu::where('name', 'Approve PO')->where('menu_id', $poRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Purchase Order Repair',
            'menu_id' => $approvePO,
            'middleware' => 'approve-purchase-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Receipt
        $createGR = Menu::where('name', 'Create GR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Receipt',
            'menu_id' => $createGR,
            'middleware' => 'create-goods-receipt',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $createGRWOR = Menu::where('name', 'Create GR without reference')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Receipt Without Ref',
            'menu_id' => $createGRWOR,
            'middleware' => 'create-goods-receipt-without-ref',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGR = Menu::where('name', 'View GR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Receipt',
            'menu_id' => $viewGR,
            'middleware' => 'list-goods-receipt',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Goods Receipt',
            'menu_id' => $viewGR,
            'middleware' => 'show-goods-receipt',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Receipt Repair
        $GRRepair = Menu::where('name', 'Goods Receipt')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        $createGRRepair = Menu::where('name', 'Create GR')->where('menu_id', $GRRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Receipt Repair',
            'menu_id' => $createGRRepair,
            'middleware' => 'create-goods-receipt-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $createGRWORRepair = Menu::where('name', 'Create GR without reference')->where('menu_id', $GRRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Receipt Without Ref Repair',
            'menu_id' => $createGRWORRepair,
            'middleware' => 'create-goods-receipt-without-ref-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGRRepair = Menu::where('name', 'View GR')->where('menu_id', $GRRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Receipt Repair',
            'menu_id' => $viewGRRepair,
            'middleware' => 'list-goods-receipt-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Goods Receipt Repair',
            'menu_id' => $viewGRRepair,
            'middleware' => 'show-goods-receipt-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Physical Inventory
        $createSnapshot = Menu::where('name', 'Create Stock Take')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Stock Take',
            'menu_id' => $createSnapshot,
            'middleware' => 'create-snapshot',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Stock Take',
            'menu_id' => $createSnapshot,
            'middleware' => 'show-snapshot',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $countStock = Menu::where('name', 'Count Stock')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Count Stock',
            'menu_id' => $countStock,
            'middleware' => 'count-stock',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $adjustStock = Menu::where('name', 'Adjust Stock')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Adjust Stock',
            'menu_id' => $adjustStock,
            'middleware' => 'adjust-stock',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewAdjustmentHistory = Menu::where('name', 'View Adjustment History')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Adjustment History',
            'menu_id' => $viewAdjustmentHistory,
            'middleware' => 'list-adjustment-history',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Adjustment History',
            'menu_id' => $viewAdjustmentHistory,
            'middleware' => 'show-adjustment-history',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Physical Inventory Repair
        $piRepair = Menu::where('name', 'Stock Taking')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        $createSnapshot = Menu::where('name', 'Create Stock Take')->where('menu_id', $piRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Stock Take',
            'menu_id' => $createSnapshot,
            'middleware' => 'create-snapshot-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Stock Take',
            'menu_id' => $createSnapshot,
            'middleware' => 'show-snapshot-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $countStock = Menu::where('name', 'Count Stock')->where('menu_id', $piRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Count Stock',
            'menu_id' => $countStock,
            'middleware' => 'count-stock-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $adjustStock = Menu::where('name', 'Adjust Stock')->where('menu_id', $piRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Adjust Stock',
            'menu_id' => $adjustStock,
            'middleware' => 'adjust-stock-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewAdjustmentHistory = Menu::where('name', 'View Adjustment History')->where('menu_id', $piRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Adjustment History',
            'menu_id' => $viewAdjustmentHistory,
            'middleware' => 'list-adjustment-history-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Adjustment History',
            'menu_id' => $viewAdjustmentHistory,
            'middleware' => 'show-adjustment-history-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Issue
        $createGI = Menu::where('route_name', 'goods_issue.selectMR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Issue',
            'menu_id' => $createGI,
            'middleware' => 'create-goods-issue',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGI = Menu::where('route_name', 'goods_issue.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Issue',
            'menu_id' => $viewGI,
            'middleware' => 'list-goods-issue',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Goods Issue',
            'menu_id' => $viewGI,
            'middleware' => 'show-goods-issue',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Goods Issue',
            'menu_id' => $viewGI,
            'middleware' => 'edit-goods-issue',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Issue Repair
        $createGI = Menu::where('route_name', 'goods_issue_repair.selectMR')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Issue',
            'menu_id' => $createGI,
            'middleware' => 'create-goods-issue-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGIRepair = Menu::where('route_name', 'goods_issue_repair.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Issue',
            'menu_id' => $viewGIRepair,
            'middleware' => 'list-goods-issue-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Goods Issue',
            'menu_id' => $viewGIRepair,
            'middleware' => 'show-goods-issue-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Goods Issue',
            'menu_id' => $viewGIRepair,
            'middleware' => 'edit-goods-issue-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Return
        $createGR = Menu::where('name', 'Based On Goods Receipt')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Return',
            'menu_id' => $createGR,
            'middleware' => 'create-goods-return',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGR = Menu::where('name', 'View & Edit Goods Return')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Return',
            'menu_id' => $viewGR,
            'middleware' => 'list-goods-return',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Goods Return',
            'menu_id' => $viewGR,
            'middleware' => 'show-goods-return',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Goods Return',
            'menu_id' => $viewGR,
            'middleware' => 'edit-goods-return',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveGR = Menu::where('name', 'Approve Goods Return')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Goods Return',
            'menu_id' => $approveGR,
            'middleware' => 'approve-goods-return',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Return Repair
        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $materialManagementRepair =  Menu::where('name', 'Material Management')->where('menu_id', $repair)->select('id')->first()->id;
        $grRepair = Menu::where('name', 'Goods Return')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        $createGRRepair = Menu::where('name', 'Based On Goods Receipt')->where('menu_id', $grRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Return',
            'menu_id' => $createGRRepair,
            'middleware' => 'create-goods-return-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGRRepair = Menu::where('name', 'View & Edit Goods Return')->where('menu_id', $grRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Return',
            'menu_id' => $viewGRRepair,
            'middleware' => 'list-goods-return-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Goods Return',
            'menu_id' => $viewGRRepair,
            'middleware' => 'show-goods-return-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Goods Return',
            'menu_id' => $viewGRRepair,
            'middleware' => 'edit-goods-return-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveGRRepair = Menu::where('name', 'Approve Goods Return')->where('menu_id', $grRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Goods Return',
            'menu_id' => $approveGRRepair,
            'middleware' => 'approve-goods-return-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Ship
        $ship = Menu::where('name', 'Ship')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Ship',
            'menu_id' => $ship,
            'middleware' => 'list-ship',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Ship',
            'menu_id' => $ship,
            'middleware' => 'create-ship',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Ship',
            'menu_id' => $ship,
            'middleware' => 'show-ship',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Ship',
            'menu_id' => $ship,
            'middleware' => 'edit-ship',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Branch
        $branch = Menu::where('name', 'Branch')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Branch',
            'menu_id' => $branch,
            'middleware' => 'list-branch',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Branch',
            'menu_id' => $branch,
            'middleware' => 'create-branch',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Branch',
            'menu_id' => $branch,
            'middleware' => 'show-branch',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Branch',
            'menu_id' => $branch,
            'middleware' => 'edit-branch',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Business Unit
        $businessUnit = Menu::where('name', 'Business Unit')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Business Unit',
            'menu_id' => $businessUnit,
            'middleware' => 'list-business-unit',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Business Unit',
            'menu_id' => $businessUnit,
            'middleware' => 'create-business-unit',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Business Unit',
            'menu_id' => $businessUnit,
            'middleware' => 'show-business-unit',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Business Unit',
            'menu_id' => $businessUnit,
            'middleware' => 'edit-business-unit',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Master Data Company
        $company = Menu::where('name', 'Company')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Company',
            'menu_id' => $company,
            'middleware' => 'list-company',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Company',
            'menu_id' => $company,
            'middleware' => 'create-company',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Company',
            'menu_id' => $company,
            'middleware' => 'show-company',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Company',
            'menu_id' => $company,
            'middleware' => 'edit-company',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Storage Location
        $storageLocation = Menu::where('name', 'Storage Location')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Storage Location',
            'menu_id' => $storageLocation,
            'middleware' => 'list-storage-location',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Storage Location',
            'menu_id' => $storageLocation,
            'middleware' => 'create-storage-location',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Storage Location',
            'menu_id' => $storageLocation,
            'middleware' => 'show-storage-location',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Storage Location',
            'menu_id' => $storageLocation,
            'middleware' => 'edit-storage-location',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Customer
        $customer = Menu::where('name', 'Customer')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Customer',
            'menu_id' => $customer,
            'middleware' => 'list-customer',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Customer',
            'menu_id' => $customer,
            'middleware' => 'create-customer',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Customer',
            'menu_id' => $customer,
            'middleware' => 'show-customer',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Customer',
            'menu_id' => $customer,
            'middleware' => 'edit-customer',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Material
        $material = Menu::where('name', 'Material')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Material',
            'menu_id' => $material,
            'middleware' => 'list-material',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Material',
            'menu_id' => $material,
            'middleware' => 'create-material',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Material',
            'menu_id' => $material,
            'middleware' => 'show-material',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Material',
            'menu_id' => $material,
            'middleware' => 'edit-material',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Resource Management
        $resource = Menu::where('name', 'Manage Resource')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Resource',
            'menu_id' => $resource,
            'middleware' => 'list-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Resource',
            'menu_id' => $resource,
            'middleware' => 'create-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Resource',
            'menu_id' => $resource,
            'middleware' => 'show-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Resource',
            'menu_id' => $resource,
            'middleware' => 'edit-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Assign Resource
        $menu_assign_resource = Menu::where('route_name','resource.assignResource')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Assign Resource',
            'menu_id' => $menu_assign_resource,
            'middleware' => 'assign-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Receive Resource
        $receiveResource = Menu::where('name', 'Receive Resource')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Receive Resource',
            'menu_id' => $receiveResource,
            'middleware' => 'create-receive-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $listResource = Menu::where('name', 'View Received Resource')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Received Resource',
            'menu_id' => $listResource,
            'middleware' => 'list-receive-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Received Resource',
            'menu_id' => $listResource,
            'middleware' => 'show-receive-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Issue Resource
        $issueResource = Menu::where('name', 'Issue Resource')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Issue Resource',
            'menu_id' => $issueResource,
            'middleware' => 'create-issue-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $listIssueResource = Menu::where('name', 'View Issued Resource')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Show Issue Resource',
            'menu_id' => $listIssueResource,
            'middleware' => 'show-issue-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'List Issue Resource',
            'menu_id' => $listIssueResource,
            'middleware' => 'list-issue-resource',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Resource Schedule
        $resourceSchedule = Menu::where('name', 'Resource Schedule')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Resource Schedule',
            'menu_id' => $resourceSchedule,
            'middleware' => 'resource-schedule',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Service
        $service = Menu::where('name', 'Service')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Service',
            'menu_id' => $service,
            'middleware' => 'list-service',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Service',
            'menu_id' => $service,
            'middleware' => 'create-service',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Service',
            'menu_id' => $service,
            'middleware' => 'show-service',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Service',
            'menu_id' => $service,
            'middleware' => 'edit-service',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Unit Of Measurement
        $uom = Menu::where('name', 'Unit Of Measurement')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Unit Of Measurement',
            'menu_id' => $uom,
            'middleware' => 'list-unit-of-measurement',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Unit Of Measurement',
            'menu_id' => $uom,
            'middleware' => 'create-unit-of-measurement',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Unit Of Measurement',
            'menu_id' => $uom,
            'middleware' => 'show-unit-of-measurement',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Unit Of Measurement',
            'menu_id' => $uom,
            'middleware' => 'edit-unit-of-measurement',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Vendor
        $vendor = Menu::where('name', 'Vendor')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Vendor',
            'menu_id' => $vendor,
            'middleware' => 'list-vendor',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Vendor',
            'menu_id' => $vendor,
            'middleware' => 'create-vendor',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Vendor',
            'menu_id' => $vendor,
            'middleware' => 'show-vendor',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Vendor',
            'menu_id' => $vendor,
            'middleware' => 'edit-vendor',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Warehouse
        $warehouse = Menu::where('name', 'Warehouse')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Warehouse',
            'menu_id' => $warehouse,
            'middleware' => 'list-warehouse',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Warehouse',
            'menu_id' => $warehouse,
            'middleware' => 'create-warehouse',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Warehouse',
            'menu_id' => $warehouse,
            'middleware' => 'show-warehouse',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Warehouse',
            'menu_id' => $warehouse,
            'middleware' => 'edit-warehouse',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Yard
        $yard = Menu::where('name', 'Yard')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List yard',
            'menu_id' => $yard,
            'middleware' => 'list-yard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Yard',
            'menu_id' => $yard,
            'middleware' => 'create-yard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Yard',
            'menu_id' => $yard,
            'middleware' => 'show-yard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Yard',
            'menu_id' => $yard,
            'middleware' => 'edit-yard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Menu
        $menu = Menu::where('name', 'Menus')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Menu',
            'menu_id' => $menu,
            'middleware' => 'list-menu',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Menu',
            'menu_id' => $menu,
            'middleware' => 'create-menu',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Menu',
            'menu_id' => $menu,
            'middleware' => 'show-menu',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Menu',
            'menu_id' => $menu,
            'middleware' => 'edit-menu',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Appearence
        $appearance = Menu::where('name', 'Appearance')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Appearence',
            'menu_id' => $appearance,
            'middleware' => 'list-appearence',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Appearence',
            'menu_id' => $appearance,
            'middleware' => 'edit-appearence',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Edit Default Password
        $cdp = Menu::where('name', 'Change Default Password')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Edit Default Password',
            'menu_id' => $cdp,
            'middleware' => 'edit-default-password',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Currencies
        $currencies = Menu::where('name', 'Currencies')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Currencies',
            'menu_id' => $currencies,
            'middleware' => 'list-currencies',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Currencies',
            'menu_id' => $currencies,
            'middleware' => 'create-currencies',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Currencies',
            'menu_id' => $currencies,
            'middleware' => 'edit-currencies',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Currencies',
            'menu_id' => $currencies,
            'middleware' => 'show-currencies',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data User
        $userManagement = Menu::where('name', 'User Management')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List User',
            'menu_id' => $userManagement,
            'middleware' => 'list-user',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create User',
            'menu_id' => $userManagement,
            'middleware' => 'create-user',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show User',
            'menu_id' => $userManagement,
            'middleware' => 'show-user',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit User',
            'menu_id' => $userManagement,
            'middleware' => 'edit-user',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Password',
            'menu_id' => $userManagement,
            'middleware' => 'edit-password',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Change Branch',
            'menu_id' => $userManagement,
            'middleware' => 'change-branch',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Change Role',
            'menu_id' => $userManagement,
            'middleware' => 'change-role',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Change Status',
            'menu_id' => $userManagement,
            'middleware' => 'change-status',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Role
        $roleManagement = Menu::where('name', 'Role Management')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Role',
            'menu_id' => $roleManagement,
            'middleware' => 'list-role',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Role',
            'menu_id' => $roleManagement,
            'middleware' => 'create-role',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Role',
            'menu_id' => $roleManagement,
            'middleware' => 'show-role',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Role',
            'menu_id' => $roleManagement,
            'middleware' => 'edit-role',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Master Data Permission
        $permissionManagement = Menu::where('name', 'Permission Management')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Permission',
            'menu_id' => $permissionManagement,
            'middleware' => 'list-permission',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Permission',
            'menu_id' => $permissionManagement,
            'middleware' => 'create-permission',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Permission',
            'menu_id' => $permissionManagement,
            'middleware' => 'show-permission',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Permission',
            'menu_id' => $permissionManagement,
            'middleware' => 'edit-permission',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Stock Management
        $stockManagement = Menu::where('name', 'Stock Management')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Stock Management',
            'menu_id' => $stockManagement,
            'middleware' => 'show-stock-management',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Stock Management Repair
        $stockManagement = Menu::where('name', 'Stock Management')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Stock Management',
            'menu_id' => $stockManagement,
            'middleware' => 'show-stock-management-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Material Write Off
        $materialWriteOff = Menu::where('name', 'Create Material Write Off')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Material Write Off',
            'menu_id' => $materialWriteOff,
            'middleware' => 'create-material-write-off',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveMaterialWriteOff = Menu::where('name', 'Approve Material Write Off')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Material Write Off',
            'menu_id' => $approveMaterialWriteOff,
            'middleware' => 'approve-material-write-off',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewMaterialWriteOff = Menu::where('name', 'View & Edit Material Write Off')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Material Write Off',
            'menu_id' => $viewMaterialWriteOff,
            'middleware' => 'list-material-write-off',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Material Write Off',
            'menu_id' => $viewMaterialWriteOff,
            'middleware' => 'edit-material-write-off',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Material Write Off',
            'menu_id' => $viewMaterialWriteOff,
            'middleware' => 'show-material-write-off',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Material Write Off Repair
        $mainMenuMaterialWriteOffRepair = Menu::where('name', 'Material Write Off')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        $materialWriteOff = Menu::where('name', 'Create Material Write Off')->where('menu_id', $mainMenuMaterialWriteOffRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Material Write Off',
            'menu_id' => $materialWriteOff,
            'middleware' => 'create-material-write-off-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $approveMaterialWriteOffRepair = Menu::where('name', 'Approve Material Write Off')->where('menu_id', $mainMenuMaterialWriteOffRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Approve Material Write Off',
            'menu_id' => $approveMaterialWriteOffRepair,
            'middleware' => 'approve-material-write-off-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewMaterialWriteOff = Menu::where('name', 'View & Edit Material Write Off')->where('menu_id', $mainMenuMaterialWriteOffRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Material Write Off',
            'menu_id' => $viewMaterialWriteOff,
            'middleware' => 'list-material-write-off-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Material Write Off',
            'menu_id' => $viewMaterialWriteOff,
            'middleware' => 'edit-material-write-off-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Material Write Off',
            'menu_id' => $viewMaterialWriteOff,
            'middleware' => 'show-material-write-off-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Movement Permission
        $building =  Menu::where('name', 'Ship Building')->select('id')->first()->id;
        $materialManagement =  Menu::where('name', 'Material Management')->where('menu_id', $building)->select('id')->first()->id;
        $goodsMovement = Menu::where('name', 'Goods Movement')->where('menu_id', $materialManagement)->select('id')->first()->id;
        $createGm = Menu::where('name', 'Create GM')->where('menu_id', $goodsMovement)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Movement',
            'menu_id' => $createGm,
            'middleware' => 'create-goods-movement',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGm = Menu::where('name', 'View GM')->where('menu_id', $goodsMovement)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Movement',
            'menu_id' => $viewGm,
            'middleware' => 'list-goods-movement',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Goods Movement',
            'menu_id' => $viewGm,
            'middleware' => 'view-goods-movement',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Goods Movement Permission
        $repair =  Menu::where('name', 'Ship Repair')->select('id')->first()->id;
        $materialManagementRepair =  Menu::where('name', 'Material Management')->where('menu_id', $repair)->select('id')->first()->id;
        $goodsMovementRepair = Menu::where('name', 'Goods Movement')->where('menu_id', $materialManagementRepair)->select('id')->first()->id;
        $createGmRepair = Menu::where('name', 'Create GM')->where('menu_id', $goodsMovementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Goods Movement Repair',
            'menu_id' => $createGmRepair,
            'middleware' => 'create-goods-movement-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewGmRepair = Menu::where('name', 'View GM')->where('menu_id', $goodsMovementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Goods Movement Repair',
            'menu_id' => $viewGmRepair,
            'middleware' => 'list-goods-movement-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'View Goods Movement Repair',
            'menu_id' => $viewGmRepair,
            'middleware' => 'view-goods-movement-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Production Order
        $createProductionOrder = Menu::where('name', 'Create Production Order')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Production Order',
            'menu_id' => $createProductionOrder,
            'middleware' => 'create-production-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewProductionOrder = Menu::where('name', 'View Production Order')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Production Order',
            'menu_id' => $viewProductionOrder,
            'middleware' => 'list-production-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Production Order',
            'menu_id' => $viewProductionOrder,
            'middleware' => 'show-production-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Production Order',
            'menu_id' => $viewProductionOrder,
            'middleware' => 'edit-production-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $releaseProductionOrder = Menu::where('name', 'Release Production Order')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Release Production Order',
            'menu_id' => $releaseProductionOrder,
            'middleware' => 'release-production-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $confirmProductionOrder = Menu::where('name', 'Confirm Production Order')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Confirm Production Order',
            'menu_id' => $confirmProductionOrder,
            'middleware' => 'confirm-production-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Production Order Repair
        $prodOrderRepair = Menu::where('name', 'Production Planning & Execution')->where('menu_id', $repair)->select('id')->first()->id;
        $createProductionOrderRepair = Menu::where('name', 'Create Production Order')->where('menu_id', $prodOrderRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Production Order Repair',
            'menu_id' => $createProductionOrder,
            'middleware' => 'create-production-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewProductionOrderRepair = Menu::where('name', 'View Production Order')->where('menu_id', $prodOrderRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Production Order Repair',
            'menu_id' => $viewProductionOrderRepair,
            'middleware' => 'list-production-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Production Order Repair',
            'menu_id' => $viewProductionOrderRepair,
            'middleware' => 'show-production-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Production Order',
            'menu_id' => $viewProductionOrderRepair,
            'middleware' => 'edit-production-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $releaseProductionOrderRepair = Menu::where('name', 'Release Production Order')->where('menu_id', $prodOrderRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Release Production Order Repair',
            'menu_id' => $releaseProductionOrderRepair,
            'middleware' => 'release-production-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $confirmProductionOrderRepair = Menu::where('name', 'Confirm Production Order')->where('menu_id', $prodOrderRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Confirm Production Order Repair',
            'menu_id' => $confirmProductionOrderRepair,
            'middleware' => 'confirm-production-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Yard Plan
        $manageYardPlan = Menu::where('name', 'Manage Yard Plan')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Yard Plan',
            'menu_id' => $manageYardPlan,
            'middleware' => 'manage-yard-plan',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewYardPlan = Menu::where('name', 'View Yard Plan')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Yard Plan',
            'menu_id' => $viewYardPlan,
            'middleware' => 'view-yard-plan',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Yard Plan Repair
        // TBD

        //Resource Management
        $resourceManagementRepair = Menu::where('name', 'Resource Management')->where('menu_id', $repair)->select('id')->first()->id;
        $resourceRepair = Menu::where('name', 'Manage Resource')->where('menu_id', $resourceManagementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Resource Repair',
            'menu_id' => $resourceRepair,
            'middleware' => 'list-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Resource Repair',
            'menu_id' => $resourceRepair,
            'middleware' => 'create-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Resource Repair',
            'menu_id' => $resource,
            'middleware' => 'show-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Resource Repair',
            'menu_id' => $resource,
            'middleware' => 'edit-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Assign Resource Repair
        $menu_assign_resource_repair = Menu::where('route_name','resource_repair.assignResource')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Assign Resource Repair',
            'menu_id' => $menu_assign_resource_repair,
            'middleware' => 'assign-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Receive Resource
        $receiveResource = Menu::where('name', 'Receive Resource')->where('menu_id', $resourceManagementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Receive Resource Repair',
            'menu_id' => $receiveResource,
            'middleware' => 'create-receive-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $listResource = Menu::where('name', 'View Received Resource')->where('menu_id', $resourceManagementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Received Resource Repair',
            'menu_id' => $listResource,
            'middleware' => 'list-receive-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Received Resource Repair',
            'menu_id' => $listResource,
            'middleware' => 'show-receive-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Issue Resource
        $issueResource = Menu::where('name', 'Issue Resource')->where('menu_id', $resourceManagementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Issue Resource Repair',
            'menu_id' => $issueResource,
            'middleware' => 'create-issue-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $listIssueResource = Menu::where('name', 'View Issued Resource')->where('menu_id', $resourceManagementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Show Issue Resource Repair',
            'menu_id' => $listIssueResource,
            'middleware' => 'show-issue-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'List Issue Resource Repair',
            'menu_id' => $listIssueResource,
            'middleware' => 'list-issue-resource-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Resource Schedule
        $resourceSchedule = Menu::where('name', 'Resource Schedule')->where('menu_id', $resourceManagementRepair)->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Resource Schedule Repair',
            'menu_id' => $resourceSchedule,
            'middleware' => 'resource-schedule-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Quality Control Task
        $menu_create_qc_task = Menu::where('route_name', 'qc_task.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create QC Task',
            'menu_id' => $menu_create_qc_task,
            'middleware' => 'create-qc-task',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_view_qc_task = Menu::where('route_name', 'qc_task.selectProjectIndex')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create QC Task',
            'menu_id' => $menu_view_qc_task,
            'middleware' => 'list-qc-task',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'View QC Task',
            'menu_id' => $menu_view_qc_task,
            'middleware' => 'show-qc-task',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit QC Task',
            'menu_id' => $menu_view_qc_task,
            'middleware' => 'edit-qc-task',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_confirm_qc_task = Menu::where('route_name', 'qc_task.selectProjectConfirm')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Confirm QC Task',
            'menu_id' => $menu_confirm_qc_task,
            'middleware' => 'confirm-qc-task',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Finish QC Task',
            'menu_id' => $menu_confirm_qc_task,
            'middleware' => 'cancel-finish-qc-task',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_summary_report_qc_task = Menu::where('route_name', 'qc_task.selectProjectSummary')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Summary Report QC Task',
            'menu_id' => $menu_summary_report_qc_task,
            'middleware' => 'summary-report-qc-task',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Quality Control Type
        $qcType = Menu::where('name', 'Create QC Type')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create QC Type',
            'menu_id' => $qcType,
            'middleware' => 'create-qc-type',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'Create QC Type',
            'menu_id' => $qcType,
            'middleware' => 'edit-qc-type',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $viewQcType = Menu::where('name', 'View & Edit QC Type')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View & Edit QC Type',
            'menu_id' => $viewQcType,
            'middleware' => 'list-qc-type',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete QC Type',
            'menu_id' => $viewQcType,
            'middleware' => 'delete-qc-type',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $showQcType = Menu::where('name', 'View & Edit QC Type')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Show QC Type',
            'menu_id' => $showQcType,
            'middleware' => 'show-qc-type',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);


        // Customer Portal View Project Progress
        $projectProgress = Menu::where('route_name', 'customer_portal.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'View Project Progress',
            'menu_id' => $projectProgress,
            'middleware' => 'show-project-progress',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Customer Portal Create Post
        $postComplaints = Menu::where('name', 'Post Complaints')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Post Complaints',
            'menu_id' => $postComplaints,
            'middleware' => 'create-post',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Customer Portal Reply post
        $postReply = Menu::where('name', 'Reply Complaints')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Reply Complaints',
            'menu_id' => $postReply,
            'middleware' => 'reply-post',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Daily Man Hour
        $daily_man_hour = Menu::where('name', 'Daily Man Hour')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Daily Man Hour',
            'menu_id' => $daily_man_hour,
            'middleware' => 'manage-daily-man-hour',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //approval configuration
        $approval_configuration = Menu::where('name', 'Approval Configuration')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Approval Configuration',
            'menu_id' => $approval_configuration,
            'middleware' => 'manage-approval-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Estimator WBS
        $menu_estimator_wbs = Menu::where('route_name', 'estimator.indexEstimatorWbs')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Estimator WBS',
            'menu_id' => $menu_estimator_wbs,
            'middleware' => 'list-estimator-wbs',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Estimator WBS',
            'menu_id' => $menu_estimator_wbs,
            'middleware' => 'create-estimator-wbs',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Estimator WBS',
            'menu_id' => $menu_estimator_wbs,
            'middleware' => 'edit-estimator-wbs',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Estimator WBS',
            'menu_id' => $menu_estimator_wbs,
            'middleware' => 'delete-estimator-wbs',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //cost type configuration
        $cost_type_configuration = Menu::where('name', 'Cost Type')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Cost Type Configuration',
            'menu_id' => $cost_type_configuration,
            'middleware' => 'manage-cost-type-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //appearance configuration
        $appearance_configuration = Menu::where('name', 'Appearance')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Appearance Configuration',
            'menu_id' => $appearance_configuration,
            'middleware' => 'manage-appearance-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //currencies configuration
        $currencies_configuration = Menu::where('name', 'Currencies')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Currencies Configuration',
            'menu_id' => $currencies_configuration,
            'middleware' => 'manage-currencies-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //material family configuration
        $material_family_configuration = Menu::where('name', 'Material Family')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Material Family Configuration',
            'menu_id' => $material_family_configuration,
            'middleware' => 'manage-material-family-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //payment terms configuration
        $payment_terms_configuration = Menu::where('name', 'Payment Terms')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Payment Terms',
            'menu_id' => $payment_terms_configuration,
            'middleware' => 'manage-payment-terms-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //density configuration
        $density_configuration = Menu::where('name', 'Density')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Density Configuration',
            'menu_id' => $density_configuration,
            'middleware' => 'manage-density-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Cost Standard
        $menu_cost_standard = Menu::where('route_name', 'estimator.indexEstimatorCostStandard')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Cost Standard',
            'menu_id' => $menu_cost_standard,
            'middleware' => 'list-cost-standard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Cost Standard',
            'menu_id' => $menu_cost_standard,
            'middleware' => 'create-cost-standard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Cost Standard',
            'menu_id' => $menu_cost_standard,
            'middleware' => 'show-cost-standard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Cost Standard',
            'menu_id' => $menu_cost_standard,
            'middleware' => 'edit-cost-standard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Cost Standard',
            'menu_id' => $menu_cost_standard,
            'middleware' => 'delete-cost-standard',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Estimator Profile
        $menu_estimator_profile = Menu::where('route_name', 'estimator.indexEstimatorProfile')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Estimator Profile',
            'menu_id' => $menu_estimator_profile,
            'middleware' => 'list-estimator-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Estimator Profile',
            'menu_id' => $menu_estimator_profile,
            'middleware' => 'create-estimator-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Estimator Profile',
            'menu_id' => $menu_estimator_profile,
            'middleware' => 'show-estimator-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Estimator Profile',
            'menu_id' => $menu_estimator_profile,
            'middleware' => 'edit-estimator-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Estimator Profile',
            'menu_id' => $menu_estimator_profile,
            'middleware' => 'delete-estimator-profile',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Estimator WBS Repair
        $menu_estimator_wbs_repair = Menu::where('route_name', 'estimator_repair.indexEstimatorWbs')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Estimator WBS Repair',
            'menu_id' => $menu_estimator_wbs_repair,
            'middleware' => 'list-estimator-wbs-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Estimator WBS Repair',
            'menu_id' => $menu_estimator_wbs_repair,
            'middleware' => 'create-estimator-wbs-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Estimator WBS Repair',
            'menu_id' => $menu_estimator_wbs_repair,
            'middleware' => 'edit-estimator-wbs-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Estimator WBS Repair',
            'menu_id' => $menu_estimator_wbs_repair,
            'middleware' => 'delete-estimator-wbs-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Cost Standard Repair
        $menu_cost_standard_repair = Menu::where('route_name', 'estimator_repair.indexEstimatorCostStandard')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Cost Standard Repair',
            'menu_id' => $menu_cost_standard_repair,
            'middleware' => 'list-cost-standard-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Cost Standard Repair',
            'menu_id' => $menu_cost_standard_repair,
            'middleware' => 'create-cost-standard-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Cost Standard Repair',
            'menu_id' => $menu_cost_standard_repair,
            'middleware' => 'show-cost-standard-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Cost Standard Repair',
            'menu_id' => $menu_cost_standard_repair,
            'middleware' => 'edit-cost-standard-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Cost Standard Repair',
            'menu_id' => $menu_cost_standard_repair,
            'middleware' => 'delete-cost-standard-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Estimator Profile Repair
        $menu_estimator_profile_repair = Menu::where('route_name', 'estimator_repair.indexEstimatorProfile')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Estimator Profile Repair',
            'menu_id' => $menu_estimator_profile_repair,
            'middleware' => 'list-estimator-profile-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Create Estimator Profile Repair',
            'menu_id' => $menu_estimator_profile_repair,
            'middleware' => 'create-estimator-profile-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Estimator Profile Repair',
            'menu_id' => $menu_estimator_profile_repair,
            'middleware' => 'show-estimator-profile-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Estimator Profile Repair',
            'menu_id' => $menu_estimator_profile_repair,
            'middleware' => 'edit-estimator-profile-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete Estimator Profile Repair',
            'menu_id' => $menu_estimator_profile_repair,
            'middleware' => 'delete-estimator-profile-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Quatation
        $menu_create_quotation = Menu::where('route_name', 'quotation.create')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Quotation',
            'menu_id' => $menu_create_quotation,
            'middleware' => 'create-quotation',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_quotation = Menu::where('route_name', 'quotation.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Quotation',
            'menu_id' => $menu_index_quotation,
            'middleware' => 'list-quotation',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Quotation',
            'menu_id' => $menu_index_quotation,
            'middleware' => 'show-quotation',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Quotation',
            'menu_id' => $menu_index_quotation,
            'middleware' => 'edit-quotation',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Quatation Repair
        $menu_create_quotation_repair = Menu::where('route_name', 'quotation_repair.create')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Quotation Repair',
            'menu_id' => $menu_create_quotation_repair,
            'middleware' => 'create-quotation-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_quotation_repair = Menu::where('route_name', 'quotation_repair.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Quotation Repair',
            'menu_id' => $menu_index_quotation_repair,
            'middleware' => 'list-quotation-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Quotation Repair',
            'menu_id' => $menu_index_quotation_repair,
            'middleware' => 'show-quotation-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Quotation Repair',
            'menu_id' => $menu_index_quotation_repair,
            'middleware' => 'edit-quotation-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Sales Order
        $menu_create_sales_order = Menu::where('route_name', 'sales_order.selectQT')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Sales Order',
            'menu_id' => $menu_create_sales_order,
            'middleware' => 'create-sales-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_sales_order = Menu::where('route_name', 'sales_order.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Sales Order',
            'menu_id' => $menu_index_sales_order,
            'middleware' => 'list-sales-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Sales Order',
            'menu_id' => $menu_index_sales_order,
            'middleware' => 'show-sales-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Sales Order',
            'menu_id' => $menu_index_sales_order,
            'middleware' => 'edit-sales-order',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Sales Order Repair
        $menu_create_sales_order_repair = Menu::where('route_name', 'sales_order_repair.selectQT')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Sales Order Repair',
            'menu_id' => $menu_create_sales_order_repair,
            'middleware' => 'create-sales-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_sales_order_repair = Menu::where('route_name', 'sales_order_repair.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Sales Order Repair',
            'menu_id' => $menu_index_sales_order_repair,
            'middleware' => 'list-sales-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Sales Order Repair',
            'menu_id' => $menu_index_sales_order_repair,
            'middleware' => 'show-sales-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Sales Order Repair',
            'menu_id' => $menu_index_sales_order_repair,
            'middleware' => 'edit-sales-order-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Invoice
        $menu_create_invoice = Menu::where('route_name', 'invoice.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Invoice',
            'menu_id' => $menu_create_invoice,
            'middleware' => 'create-invoice',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_invoice = Menu::where('route_name', 'invoice.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Invoice',
            'menu_id' => $menu_index_invoice,
            'middleware' => 'list-invoice',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Invoice',
            'menu_id' => $menu_index_invoice,
            'middleware' => 'show-invoice',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Invoice',
            'menu_id' => $menu_index_invoice,
            'middleware' => 'edit-invoice',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Invoice Repair
        $menu_create_invoice_repair = Menu::where('route_name', 'invoice_repair.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Invoice Repair',
            'menu_id' => $menu_create_invoice_repair,
            'middleware' => 'create-invoice-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_invoice_repair = Menu::where('route_name', 'invoice_repair.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Invoice Repair',
            'menu_id' => $menu_index_invoice_repair,
            'middleware' => 'list-invoice-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Invoice Repair',
            'menu_id' => $menu_index_invoice_repair,
            'middleware' => 'edit-invoice-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Invoice Repair',
            'menu_id' => $menu_index_invoice_repair,
            'middleware' => 'show-invoice-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //delivery terms configuration
        $delivery_terms_configuration = Menu::where('name', 'Delivery Terms')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Delivery Terms',
            'menu_id' => $delivery_terms_configuration,
            'middleware' => 'manage-delivery-terms-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //weather configuration
        $weather_configuration = Menu::where('name', 'Weather Configuration')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Weather Configuration',
            'menu_id' => $weather_configuration,
            'middleware' => 'manage-weather-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //tidal configuration
        $tidal_configuration = Menu::where('name', 'Tidal Configuration')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Tidal Configuration',
            'menu_id' => $tidal_configuration,
            'middleware' => 'manage-tidal-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //dimension type configuration
        $dimension_type_configuration = Menu::where('name', 'Dimension Type Configuration')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Dimension Type Configuration',
            'menu_id' => $dimension_type_configuration,
            'middleware' => 'manage-dimension-type-configuration',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //daily info weather
        $daily_weather = Menu::where('name', 'Weather')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Daily Weather',
            'menu_id' => $daily_weather,
            'middleware' => 'manage-weather',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //daily info tidal
        $daily_tidal = Menu::where('name', 'Tidal')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Daily Tidal',
            'menu_id' => $daily_tidal,
            'middleware' => 'manage-tidal',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Payment
        $menu_create_payment = Menu::where('route_name', 'payment.selectInvoice')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Payment',
            'menu_id' => $menu_create_payment,
            'middleware' => 'create-payment',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_payment = Menu::where('route_name', 'payment.selectInvoiceView')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Payment',
            'menu_id' => $menu_index_payment,
            'middleware' => 'list-payment',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Payment',
            'menu_id' => $menu_index_payment,
            'middleware' => 'edit-payment',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Payment',
            'menu_id' => $menu_index_payment,
            'middleware' => 'show-payment',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Payment Repair
        $menu_create_payment_repair = Menu::where('route_name', 'payment_repair.selectInvoice')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create Payment Repair',
            'menu_id' => $menu_create_payment_repair,
            'middleware' => 'create-payment-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_index_payment_repair = Menu::where('route_name', 'payment_repair.selectInvoiceView')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Payment Repair',
            'menu_id' => $menu_index_payment_repair,
            'middleware' => 'list-payment-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit Payment Repair',
            'menu_id' => $menu_index_payment_repair,
            'middleware' => 'edit-payment-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Payment Repair',
            'menu_id' => $menu_index_payment_repair,
            'middleware' => 'show-payment-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Quality Control Task Repair
        $menu_create_qc_task_repair = Menu::where('route_name', 'qc_task_repair.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create QC Task',
            'menu_id' => $menu_create_qc_task_repair,
            'middleware' => 'create-qc-task-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);


        $menu_view_qc_task_repair = Menu::where('route_name', 'qc_task_repair.selectProjectIndex')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Create QC Task Repair',
            'menu_id' => $menu_view_qc_task_repair,
            'middleware' => 'list-qc-task-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'View QC Task Repair',
            'menu_id' => $menu_view_qc_task_repair,
            'middleware' => 'show-qc-task-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Edit QC Task Repair',
            'menu_id' => $menu_view_qc_task_repair,
            'middleware' => 'edit-qc-task-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_confirm_qc_task_repair = Menu::where('route_name', 'qc_task_repair.selectProjectConfirm')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Confirm QC Task Repair',
            'menu_id' => $menu_confirm_qc_task_repair,
            'middleware' => 'confirm-qc-task-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Cancel Finish QC Task Repair',
            'menu_id' => $menu_confirm_qc_task_repair,
            'middleware' => 'cancel-finish-qc-task-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_summary_report_qc_task_repair = Menu::where('route_name', 'qc_task_repair.selectProjectSummary')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Summary Report QC Task Repair',
            'menu_id' => $menu_summary_report_qc_task_repair,
            'middleware' => 'summary-report-qc-task-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Sales Plan
        $menu_sales_plan = Menu::where('route_name','sales_plan.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Sales Plan',
            'menu_id' => $menu_sales_plan,
            'middleware' => 'manage-sales-plan',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Sales Plan
        $menu_sales_plan_repair = Menu::where('route_name','sales_plan_repair.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Sales Plan Repair',
            'menu_id' => $menu_sales_plan_repair,
            'middleware' => 'manage-sales-plan-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Customer Visit
        $menu_customer_visit = Menu::where('route_name','customer_visit.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Customer Visit',
            'menu_id' => $menu_customer_visit,
            'middleware' => 'manage-customer-visit',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Customer Visit
        $menu_customer_visit_repair = Menu::where('route_name','customer_visit_repair.index')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Customer Visit Repair',
            'menu_id' => $menu_customer_visit_repair,
            'middleware' => 'manage-customer-visit-repair',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        // Delivery Document
        $menu_manage_delivery_document = Menu::where('route_name', 'delivery_document.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Manage Delivery Document',
            'menu_id' => $menu_manage_delivery_document,
            'middleware' => 'manage-delivery-document',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $menu_view_delivery_document = Menu::where('route_name', 'delivery_document.selectProjectIndex')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'List Delivery Document',
            'menu_id' => $menu_view_delivery_document,
            'middleware' => 'list-delivery-document',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        DB::table('permissions')->insert([
            'name' => 'Show Delivery Document',
            'menu_id' => $menu_view_delivery_document,
            'middleware' => 'show-delivery-document',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        //Close Project
        $menu_close_project = Menu::where('route_name', 'close_project.selectProject')->select('id')->first()->id;
        DB::table('permissions')->insert([
            'name' => 'Close Project',
            'menu_id' => $menu_close_project,
            'middleware' => 'close-project',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
    }
}
