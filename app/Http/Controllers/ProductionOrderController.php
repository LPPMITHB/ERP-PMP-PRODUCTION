<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use App\Models\Branch;
use App\Models\Project;
use App\Models\WBS;
use App\Models\ProductionOrder;
use App\Models\ProductionOrderDetail;
use App\Models\Bom;
use App\Models\Uom;
use App\Models\Material;
use App\Models\Resource;
use App\Models\Service;
use App\Models\Activity;
use App\Models\ResourceTrx;
use App\Models\Stock;
use App\Models\ProjectInventory;
use App\Models\ResourceDetail;
use App\Models\MaterialRequisition;
use App\Models\MaterialRequisitionDetail;
use App\Models\Configuration;
use App\Models\GoodsReceipt;
use App\Models\GoodsReceiptDetail;
use App\Models\GoodsIssue;
use App\Models\GoodsIssueDetail;
use App\Models\GoodsReturn;
use App\Models\GoodsReturnDetail;
use App\Models\StorageLocation;
use App\Models\StorageLocationDetail;
use App\Models\BomPrep;
use App\Models\ProductionOrderUpload;
use App\Models\ProductionOrderReturn;
use App\Models\WbsMaterial;
use App\Models\BomDetail;
use Auth;
use DateTime;
use DB;
use File;

class ProductionOrderController extends Controller
{
    public function deleteImage(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $pou = ProductionOrderUpload::findOrFail($id);

            $image_path = public_path("app/documents/production_order/".$pou->picture); 
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $pou->delete();
            DB::commit();
            return response(["response"=>"Success to delete image"],Response::HTTP_OK);
        } catch (\Exception $e) {
            DB::rollback();
            return response(["error"=> $e->getMessage()],Response::HTTP_OK);
        }
    }

    public function upload(Request $request){
        $route = $request->route()->getPrefix();
        $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        DB::beginTransaction();
        try{
            if($request->hasFile('image')){
                // Get filename with the extension
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                // Get just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // File name to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                // Upload image
                $path = $request->file('image')->storeAs('documents/production_order',$fileNameToStore);
            }else{
                $fileNameToStore =  null;
            }
    
            $POU = new ProductionOrderUpload;
            $POU->picture = $fileNameToStore;
            $POU->production_order_id = $request->prod_id;
            $POU->description = $request->description;
            $POU->user_id = Auth::user()->id;
            $POU->branch_id = Auth::user()->branch->id;
            $POU->save();

            DB::commit();
            if($route == "/production_order"){
                return redirect()->route('production_order.confirm', ['id' => $request->prod_id])->with('success', 'Upload Success!');
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.confirm', ['id' => $request->prod_id])->with('success', 'Upload Success!');
            }
        } catch (\Exception $e) {
            DB::rollback();
            if($route == "/production_order"){
                return redirect()->route('production_order.confirm', ['id' => $request->prod_id])->with( 'error',$e->getMessage());
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.confirm', ['id' => $request->prod_id])->with( 'error',$e->getMessage());
            }
        }
    }

    public function selectProject(Request $request){
        $route = $request->route()->getPrefix();
        if($route == "/production_order"){
            $modelProject = Project::where('status',1)->where('business_unit_id',1)->get();
        }elseif($route == "/production_order_repair"){
            $modelProject = Project::where('status',1)->where('business_unit_id',2)->get();
        }
        $menu = "create_pro";

        return view('production_order.selectProject', compact('modelProject','menu','route'));
    }

    public function selectProjectRelease (Request $request){
        $route = $request->route()->getPrefix();
        if($route == "/production_order"){
            $modelProject = Project::where('status',1)->where('business_unit_id',1)->get();
        }elseif($route == "/production_order_repair"){
            $modelProject = Project::where('status',1)->where('business_unit_id',2)->get();
        }
        $menu = "release_pro";

        return view('production_order.selectProject', compact('modelProject','menu','route'));
    }

    public function selectProjectConfirm (Request $request){
        $route = $request->route()->getPrefix();
        if($route == "/production_order"){
            $modelProject = Project::where('status',1)->where('business_unit_id',1)->get();
        }elseif($route == "/production_order_repair"){
            $modelProject = Project::where('status',1)->where('business_unit_id',2)->get();
        }
        $menu = "confirm_pro";

        return view('production_order.selectProject', compact('modelProject','menu','route'));
    }

    public function selectProjectReport (Request $request){
        $route = $request->route()->getPrefix();
        if($route == "/production_order"){
            $modelProject = Project::where('status',1)->where('business_unit_id',1)->get();
        }elseif($route == "/production_order_repair"){
            $modelProject = Project::where('status',1)->where('business_unit_id',2)->get();
        }
        $menu = "report_pro";

        return view('production_order.selectProject', compact('modelProject','menu','route'));
    }

    public function selectProjectIndex (Request $request){
        $route = $request->route()->getPrefix();
        if($route == "/production_order"){
            $modelProject = Project::where('business_unit_id',1)->get();
        }elseif($route == "/production_order_repair"){
            $modelProject = Project::where('business_unit_id',2)->get();
        }
        $menu = "index_pro";

        return view('production_order.selectProject', compact('modelProject','menu','route'));
    }
    
    public function selectWBS(Request $request,$id){
        $route = $request->route()->getPrefix();

        $modelProject = Project::findOrFail($id);
        $wbss = $modelProject->wbss;
        $dataWbs = Collection::make();

        $totalWeightProject = $modelProject->wbss->where('wbs_id',null)->sum('weight');
        $dataWbs->push([
            "id" => $modelProject->number, 
            "parent" => "#",
            "text" => $modelProject->name. " | Weight : (".$totalWeightProject."% / 100%)",
            "icon" => "fa fa-ship"
        ]);
        if($route == "/production_order"){
            $routes = '/production_order/create/';
        }elseif($route == "/production_order_repair"){
            $routes = '/production_order_repair/create/';
        }
    
        foreach($wbss as $wbs){
            if($wbs->wbs){
                if(count($wbs->activities)>0){
                    $totalWeight = $wbs->wbss->sum('weight') + $wbs->activities->sum('weight');
                    if($wbs->productionOrder==null){
                        $dataWbs->push([
                            "id" => $wbs->code , 
                            "parent" => $wbs->wbs->code,
                            "text" => $wbs->number.' - '.$wbs->description. " | Weight : (".$totalWeight."% / ".$wbs->weight."%)",
                        "start_date" => $wbs->planned_start_date,                            
                            "icon" => "fa fa-suitcase",
                            "a_attr" =>  ["href" => $routes.$wbs->id],
                        ]);
                    }else{
                        if($route == "/production_order"){
                            $show = '/production_order/';
                        }elseif($route == "/production_order_repair"){
                            $show = '/production_order_repair/';
                        }
                        $dataWbs->push([
                            "id" => $wbs->code , 
                            "parent" => $wbs->wbs->code,
                            "text" => $wbs->number.' - '.$wbs->description. " | Weight : (".$totalWeight."% / ".$wbs->weight."%)",
                        "start_date" => $wbs->planned_start_date,                            
                            "icon" => "fa fa-suitcase",
                            "a_attr" =>  ["href" => $show.$wbs->productionOrder->id],
                        ]);
                    }
                }else{
                    if($wbs->productionOrder==null){
                        $dataWbs->push([
                            "id" => $wbs->code , 
                            "parent" => $wbs->wbs->code,
                            "text" => $wbs->number.' - '.$wbs->description. " | Weight : ".$wbs->weight."%",
                        "start_date" => $wbs->planned_start_date,                            
                            "icon" => "fa fa-suitcase",
                            "a_attr" =>  ["href" => $routes.$wbs->id],
                        ]);
                    }else{
                        if($route == "/production_order"){
                            $show = '/production_order/';
                        }elseif($route == "/production_order_repair"){
                            $show = '/production_order_repair/';
                        }
                        $dataWbs->push([
                            "id" => $wbs->code , 
                            "parent" => $wbs->wbs->code,
                            "text" => $wbs->number.' - '.$wbs->description. " | Weight : ".$wbs->weight."%",
                        "start_date" => $wbs->planned_start_date,                            
                            "icon" => "fa fa-suitcase",
                            "a_attr" =>  ["href" => $show.$wbs->productionOrder->id],
                        ]);  
                    }
                    
                }
            }else{
                $totalWeight = $wbs->wbss->sum('weight') + $wbs->activities->sum('weight');
                if($wbs->productionOrder==null){
                    $dataWbs->push([
                        "id" => $wbs->code , 
                        "parent" => $modelProject->number,
                        "text" => $wbs->number.' - '.$wbs->description. " | Weight : (".$totalWeight."% / ".$wbs->weight."%)",
                        "start_date" => $wbs->planned_start_date,                        
                        "icon" => "fa fa-suitcase",
                        "a_attr" =>  ["href" => $routes.$wbs->id],
                    ]);
                }else{
                    if($route == "/production_order"){
                        $show = '/production_order/';
                    }elseif($route == "/production_order_repair"){
                        $show = '/production_order_repair/';
                    }
                    $dataWbs->push([
                        "id" => $wbs->code , 
                        "parent" => $modelProject->number,
                        "text" => $wbs->number.' - '.$wbs->description. " | Weight : (".$totalWeight."% / ".$wbs->weight."%)",
                        "start_date" => $wbs->planned_start_date,                        
                        "icon" => "fa fa-suitcase",
                        "a_attr" =>  ["href" => $show.$wbs->productionOrder->id],
                    ]);
                }
            } 
        }

        $dataWbs = $dataWbs->toArray();
        // Asc sort
        usort($dataWbs,function($first,$second){
            if ((strpos($first['id'], 'WBS') !== false && strpos($second['id'], 'WBS') !== false)) {
                return $first['start_date'] > $second['start_date'];
            }
        });

        return view('production_order.selectWBS', compact('dataWbs','modelProject','route'));
    }

    public function selectPrO(Request $request, $id){
        $route = $request->route()->getPrefix();
        $modelProject = Project::findOrFail($id);
        $modelPrO = ProductionOrder::where('project_id',$id)->where('status',1)->get();

        return view('production_order.selectPrO', compact('modelPrO','modelProject','route'));
    }

    public function confirmPrO(Request $request,$id){
        $route = $request->route()->getPrefix();
        $modelProject = Project::findOrFail($id);
        $modelPrO = ProductionOrder::where('project_id',$id)->where('status',2)->get();

        return view('production_order.confirmPrO', compact('modelPrO','modelProject','route'));
    }

    public function indexPrO(Request $request,$id)
    {
        $route = $request->route()->getPrefix();
        if($route == "/production_order"){
            $project_ids = Project::where('business_unit_id',1)->pluck('id')->toArray();
        }elseif($route == "/production_order_repair"){
            $project_ids = Project::where('business_unit_id',2)->pluck('id')->toArray();
        }
        
        $modelProject = Project::where('status',1)->where('business_unit_id',$project_ids)->get();
        
        $modelPrOs = ProductionOrder::where('project_id',$id)->with('project','wbs')->get();

        $id = $id;

        return view('production_order.index',compact('modelProject','modelPrOs','route','id'));
    }

    public function selectPrOReport($id){
        $modelProject = Project::findOrFail($id);
        $modelPrO = ProductionOrder::where('project_id',$id)->where('status',1)->get();

        return view('production_order.selectPrOReport', compact('modelPrO','modelProject'));
    }

    public function report($id){
        $modelPrO = ProductionOrder::findOrFail($id);
        $modelProject = Project::findOrFail($modelPrO->project_id);
        $totalPrice = 0;
        foreach($modelPrO->ProductionOrderDetails as $PrO){
            if($PrO->material_id != ""){
                $totalPrice += $PrO->actual * $PrO->material->cost_standard_price;
            }
        }
        return view('production_order.report', compact('modelPrO','modelProject','totalPrice'));
    }

    public function release(Request $request, $id){
        $route = $request->route()->getPrefix();
        $modelPrO = ProductionOrder::where('id',$id)->first();
        $modelPrOD = ProductionOrderDetail::where('production_order_id',$modelPrO->id)->get();
        $project = Project::where('id',$modelPrO->project_id)->with('customer','ship')->first();
        $wbs = WBS::findOrFail($modelPrO->wbs_id);
        $wbsMaterials = WbsMaterial::where('wbs_id',$wbs->id)->with('material')->get();
        foreach ($wbsMaterials as $wbsMaterial) {
            if($wbsMaterial->dimensions_value != null){
                $estimated_quantity = ceil($wbsMaterial->weight / $wbsMaterial->material->weight);
                $temp_dimensions_value = json_decode($wbsMaterial->dimensions_value);
    
                $dimensions_string = "";
                foreach ($temp_dimensions_value as $dimension) {
                    $dimension->uom = Uom::find($dimension->uom_id);
                    if($dimensions_string == ""){
                        $dimensions_string .= $dimension->value_input." ".$dimension->uom->unit;
                    }else{
                        $dimensions_string .= " x ".$dimension->value_input." ".$dimension->uom->unit;
                    }   
                }
                $wbsMaterial->estimated_quantity = $estimated_quantity;
                $wbsMaterial->dimensions_string = $dimensions_string;
                $wbsMaterial->dimensions_value_obj = $temp_dimensions_value;
            }else{
                $wbsMaterial->estimated_quantity = $wbsMaterial->quantity;
                $wbsMaterial->part_description = "-";
                $wbsMaterial->dimensions_string = "-";
            }
        }
        $activities = $wbs->activities;
        $materials = Collection::make();
        $services = Collection::make();
        $resources = Collection::make();
        foreach($modelPrOD as $prOD){
            if($prOD->quantity > 0){
                if($prOD->material_id != ""){
                    $materials->push([
                        "id" => $prOD->id , 
                        "material" => [
                            "code" => $prOD->material->code,
                            "name" => $prOD->material->name,
                            "description" => $prOD->material->description,
                            "unit" => $prOD->material->uom->unit,
                            "source" => $prOD->source,
                        ],
                        "quantity" => $prOD->quantity,
                        "quantityFloat" => $prOD->quantity,
                        "material_id" => $prOD->material_id,
                        "material_type" => $prOD->material_type,
                        'allocated' => "",
                    ]);
                }elseif($prOD->resource_id != ""){
                    $qty =  $prOD->quantity;
                    for ($x = 0; $x < $qty; $x++) {
                        $resources->push([
                            "id" => $prOD->id , 
                            "resource" => [
                                "code" => $prOD->resource->code,
                                "name" => $prOD->resource->name,
                                "description" => $prOD->resource->description,
                                "category_id" => $prOD->category_id,
                            ],
                            "resource_detail" =>[
                                "code" => ($prOD->resourceDetail) ? $prOD->resourceDetail->code : null,
                                "id" => ($prOD->resourceDetail) ? $prOD->resourceDetail->id : null,
                            ],
                            "quantity" => $prOD->quantity,
                            "resource_id" => $prOD->resource_id,
                            "trx_resource_id" => $prOD->trx_resource_id,
                            "status" => null,
                        ]);
                    } 
                }
            }
        }
        return view('production_order.release', compact('modelPrO','wbsMaterials','project','modelPrOD','materials','services','resources','route','wbs','activities'));
    }

    public function releaseRepair(Request $request, $id){
        $route = $request->route()->getPrefix();
        $modelPrO = ProductionOrder::where('id',$id)->first();
        $modelPrOD = ProductionOrderDetail::where('production_order_id',$modelPrO->id)->get();
        $project = Project::where('id',$modelPrO->project_id)->with('customer','ship')->first();
        $wbs = WBS::findOrFail($modelPrO->wbs_id);
        $wbsMaterials = WbsMaterial::where('wbs_id',$wbs->id)->with('material')->get();
        foreach ($wbsMaterials as $wbsMaterial) {
            if($wbsMaterial->dimensions_value != null){
                $estimated_quantity = ceil($wbsMaterial->weight / $wbsMaterial->material->weight);
                $temp_dimensions_value = json_decode($wbsMaterial->dimensions_value);
    
                $dimensions_string = "";
                foreach ($temp_dimensions_value as $dimension) {
                    $dimension->uom = Uom::find($dimension->uom_id);
                    if($dimensions_string == ""){
                        $dimensions_string .= $dimension->value_input." ".$dimension->uom->unit;
                    }else{
                        $dimensions_string .= " x ".$dimension->value_input." ".$dimension->uom->unit;
                    }   
                }
                $wbsMaterial->estimated_quantity = $estimated_quantity;
                $wbsMaterial->dimensions_string = $dimensions_string;
                $wbsMaterial->dimensions_value_obj = $temp_dimensions_value;
            }else{
                $wbsMaterial->estimated_quantity = $wbsMaterial->quantity;
                $wbsMaterial->part_description = "-";
                $wbsMaterial->dimensions_string = "-";
            }
        }
        $activities = $wbs->activities;
        $materials = Collection::make();
        $services = Collection::make();
        $resources = Collection::make();
        foreach($modelPrOD as $prOD){
            if($prOD->quantity > 0){
                if($prOD->material_id != ""){
                    $materials->push([
                        "id" => $prOD->id , 
                        "material" => [
                            "code" => $prOD->material->code,
                            "name" => $prOD->material->name,
                            "description" => $prOD->material->description,
                            "unit" => $prOD->material->uom->unit,
                            "source" => $prOD->source,
                        ],
                        "quantity" => $prOD->quantity,
                        "quantityFloat" => $prOD->quantity,
                        "material_id" => $prOD->material_id,
                        "material_type" => $prOD->material_type,
                        'allocated' => "",
                    ]);
                }elseif($prOD->resource_id != ""){
                    $qty =  $prOD->quantity;
                    for ($x = 0; $x < $qty; $x++) {
                        $resources->push([
                            "id" => $prOD->id , 
                            "resource" => [
                                "code" => $prOD->resource->code,
                                "name" => $prOD->resource->name,
                                "description" => $prOD->resource->description,
                                "category_id" => $prOD->category_id,
                            ],
                            "resource_detail" =>[
                                "code" => ($prOD->resourceDetail) ? $prOD->resourceDetail->code : null,
                                "id" => ($prOD->resourceDetail) ? $prOD->resourceDetail->id : null,
                            ],
                            "quantity" => $prOD->quantity,
                            "resource_id" => $prOD->resource_id,
                            "trx_resource_id" => $prOD->trx_resource_id,
                            "status" => null,
                        ]);
                    } 
                }
            }
        }

        return view('production_order.releaseRepair', compact('modelPrO','wbsMaterials','project','modelPrOD','materials','services','resources','route','wbs','activities'));
    }

    public function confirm(Request $request,$id){
        $route = $request->route()->getPrefix();
        $modelPrO = ProductionOrder::where('id',$id)->with('project')->first();
        $modelPrOD = ProductionOrderDetail::where('production_order_id',$modelPrO->id)->with('material','material.uom','resource','service','productionOrder','resourceDetail')->get();
        $project = Project::where('id',$modelPrO->project_id)->with('customer','ship')->first();
        $uoms = Uom::all()->jsonSerialize();

        $wbs = WBS::find($modelPrO->wbs_id);
        $boms = Bom::where('project_id', $wbs->project_id)->with('wbs')->get();
        $POU = ProductionOrderUpload::where('production_order_id',$modelPrO->id)->with('user')->get();
        // $materials = Collection::make();
        $modelSloc = StorageLocation::all();

        $materials = Material::all();
        foreach ($materials as $material) {
            $material['selected'] = false;
        }
        foreach($modelPrOD as $prod){
            if($prod->material_id != null){
                $modelMRD = MaterialRequisitionDetail::where('wbs_id',$prod->productionOrder->wbs_id)->select('material_requisition_id')->get();
                $modelGI = GoodsIssue::whereIn('material_requisition_id',$modelMRD)->get();
                $actual = 0;
                $return = 0;
                foreach($modelGI as $gi){
                    foreach($gi->goodsIssueDetails as $gid){
                        if($gid->material_id == $prod->material_id){
                            $actual += $gid->quantity;
                        }
                    }
                }
                $prod->actual = $actual;
                // $materials->push([
                //    "material_code" => $prod->material->code,
                //    "material_description" => $prod->material->description,
                //    "quantity" => $prod->quantity,
                //    "actual" => $actual - $return,
                //    "remaining" => $prod->quantity - $actual + $return,
                //    "unit" => $prod->material->uom->unit
                // ]);
    
                foreach ($prod->productionOrderReturns as $returned_material) {
                    if($returned_material->type == "Other BOM"){
                        $bom_ref = $returned_material->bomDetail->bom;
                        $returned_material['bom_code'] = $bom_ref->code;
                        $returned_material['bom_description'] = $bom_ref->description;
                        $returned_material['sloc_name'] = "-";
                        $returned_material['received_date'] = "-";
    
                    }elseif($returned_material->type == "Storage"){
                        $returned_material['sloc_name'] = $returned_material->storageLocation->code." - ".$returned_material->storageLocation->description;
                        $grd_ref = $returned_material->goodsReceiptDetail;
                        $returned_material['received_date'] = date("d-m-Y", strtotime($grd_ref->received_date));;
                    }
                    $returned_material['material_name'] = $returned_material->material->code." - ".$returned_material->material->description;
                    $returned_material['new'] = false;
                }
    
                $prod['returned_materials'] = $prod->productionOrderReturns;
                $prod['deleted_returned_material'] = [];
            }
        }
        return view('production_order.confirm', compact('boms','modelSloc','modelPrO','project','modelPrOD','route','uoms','POU','materials'));
    }

    public function confirmRepair(Request $request,$id){
        $route = $request->route()->getPrefix();
        $modelPrO = ProductionOrder::where('id',$id)->with('project')->first();
        $modelPrOD = ProductionOrderDetail::where('production_order_id',$modelPrO->id)->with('material','material.uom','resource','service','productionOrder','resourceDetail')->get();
        $project = Project::where('id',$modelPrO->project_id)->with('customer','ship')->first();
        $uoms = Uom::all()->jsonSerialize();
        $densities = Configuration::get('density'); 
        $modelSloc = StorageLocation::all();
        
        $wbs = WBS::find($modelPrO->wbs_id);
        $boms = Bom::where('project_id', $wbs->project_id)->with('wbs')->get();
        
        foreach ($modelPrOD as $prod) {
            if($prod->material_id != null){
                if($prod->material->dimension_type_id == 1){
                    foreach ($densities as $density) {
                        if($density->id == $prod->material->density_id){
                            $prod->material['density'] = $density;
                        }
                    }

                    $prod->dimensions_value = $material->dimensions_value;
                    $prod->dimensions_value_obj = json_decode($prod->dimensions_value);
                    foreach ($prod->dimensions_value_obj as $dimension) {
                        $dimension->uom = Uom::find($dimension->uom_id);
                    }
                }
    
                $prod['weight'] = "";
                $prod['editable'] = true;
    
                foreach ($prod->productionOrderReturns as $returned_material) {
                    if($returned_material->type == "Other BOM"){
                        $bom_ref = $returned_material->bomDetail->bom;
                        $returned_material['bom_code'] = $bom_ref->code;
                        $returned_material['bom_description'] = $bom_ref->description;
                        $returned_material['sloc_name'] = "-";
                        $returned_material['received_date'] = "-";
    
                    }elseif($returned_material->type == "Storage"){
                        $returned_material['sloc_name'] = $returned_material->storageLocation->code." - ".$returned_material->storageLocation->description;
                        $grd_ref = $returned_material->goodsReceiptDetail;
                        $returned_material['received_date'] = date("d-m-Y", strtotime($grd_ref->received_date));;
                    }
                    $returned_material['material_name'] = $returned_material->material->code." - ".$returned_material->material->description;
                    $returned_material['new'] = false;
                }
    
                $prod['returned_materials'] = $prod->productionOrderReturns;
                $prod['deleted_returned_material'] = [];
            }
        }
        $materials = Material::all();
        foreach ($materials as $material) {
            $material['selected'] = false;
        }


        return view('production_order.confirmRepair', compact('modelPrO','project','modelPrOD','route','uoms','materials','modelSloc'));
    }

    public function checkProdOrder(Request $request,$code){
        $route = $request->route()->getPrefix();

        if (strpos($code, 'WBS') !== false) {
            $wbs = WBS::where('code',$code)->first();
            $prod_order = $wbs->productionOrder;
            if($prod_order != null){
                if($prod_order->status == 0){
                    if($route == "/production_order"){
                        return redirect()->route('production_order.show',$prod_order->id);
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('production_order.show',$prod_order->id);
                    }
                }else if($prod_order->status == 1){
                    if($route == "/production_order"){
                        return redirect()->route('production_order.release',$prod_order->id);
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('production_order.release',$prod_order->id);
                    }
                }else if($prod_order->status == 2){
                    if($route == "/production_order"){
                        return redirect()->route('production_order.confirm',$prod_order->id);
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('production_order.confirm',$prod_order->id);
                    }
                }
            }else{
                $modelBOM = Bom::where('wbs_id',$wbs->id)->first();
                if($modelBOM != null){
                    return redirect()->route('production_order.create',$wbs->id);
                }else{
                    if($route == "/production_order"){
                        return redirect()->route('project.show',$wbs->project_id)->with('error', "This WBS doesn't have BOM");
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('project.show',$wbs->project_id)->with('error', "This WBS doesn't have BOM");
                    }
                }
            }
        }else if(strpos($code, 'ACT') !== false){
            $act = Activity::where('code',$code)->first(); 
            $wbs = $act->wbs;
            $prod_order = $wbs->productionOrder;
            if($prod_order != null){
                if($prod_order->status == 0){
                    if($route == "/production_order"){
                        return redirect()->route('production_order.show',$prod_order->id);
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('production_order.show',$prod_order->id);
                    }
                }else if($prod_order->status == 1){
                    if($route == "/production_order"){
                        return redirect()->route('production_order.release',$prod_order->id);
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('production_order.release',$prod_order->id);
                    }
                }else if($prod_order->status == 2){
                    if($route == "/production_order"){
                        return redirect()->route('production_order.confirm',$prod_order->id);
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('production_order.confirm',$prod_order->id);
                    }
                }
            }else{
                $project = Project::findOrFail($wbs->project_id);
                $materials = Material::all()->jsonSerialize();
                $resources = Resource::all()->jsonSerialize();
                $services = Service::all()->jsonSerialize();
                $modelActivities = $wbs->activities;
                
                $modelBOM = Bom::where('wbs_id',$wbs->id)->first();
                $modelRD = ResourceTrx::where('wbs_id',$wbs->id)->get();
                if($modelBOM != null){
                        return redirect()->route('production_order.create',$wbs->id);
                }else{
                    if($route == "/production_order"){
                        return redirect()->route('project.show',$wbs->project_id)->with('error', "This WBS doesn't have BOM");
                    }elseif($route == "/production_order_repair"){
                        return redirect()->route('project.show',$wbs->project_id)->with('error', "This WBS doesn't have BOM");
                    }
                }
            }
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $route = $request->route()->getPrefix();
        $wbs = WBS::findOrFail($id);
        if($wbs->planned_start_date = null || $wbs->planned_end_date == null || $wbs->weight == null){
            return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "Please define planned start date, end date, and weight for ".$wbs->number);
        }
        $temp_top_wbs = self::getTopWbs($wbs);
        
        $project = Project::findOrFail($wbs->project_id);
        $materials = Material::orderBy('description')->get()->jsonSerialize();
        $resources = Resource::all()->jsonSerialize();
        $services = Service::all()->jsonSerialize();
        $modelActivities = $wbs->activities;
        $activity_not_ok = false;
        for ($i=0; $i < count($modelActivities); $i++) { 
            if($modelActivities[$i]->planned_start_date == null || $modelActivities[$i]->planned_end_date == null || $modelActivities[$i]->weight == null){
                $activity_not_ok = true;
                $i = count($modelActivities)+1;
            }
        }
        if($activity_not_ok){
            return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "Please define planned start date, end date, and weight for ".$wbs->number." activities");
        }

        $modelBOM = Bom::where('wbs_id',$temp_top_wbs->id)->first();
        $modelRD = ResourceTrx::where('wbs_id',$wbs->id)->get();
        if($modelBOM != null){
            return view('production_order.create', compact('wbs','project','materials','resources','services','modelBOM','modelRD','route','modelActivities'));
        }else{            
            return view('production_order.create', compact('wbs','project','materials','resources','services','modelBOM','modelRD','route','modelActivities'));
            // if($route == "/production_order"){
            //     return redirect()->route('production_order.selectWBS',$wbs->project_id)->with('error', "This top WBS doesn't have BOM");
            // }elseif($route == "/production_order_repair"){
            //     return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "This top WBS doesn't have BOM");
            // }
        }
    }

    public function createRepair(Request $request, $id)
    {
        $route = $request->route()->getPrefix();
        $wbs = WBS::find($id);
        if($wbs->planned_start_date = null || $wbs->planned_end_date == null || $wbs->weight == null){
            return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "Please define planned start date, end date, and weight for ".$wbs->number);
        }

        $project = Project::findOrFail($wbs->project_id);
        $materials = Material::all()->jsonSerialize();
        $resources = Resource::all()->jsonSerialize();
        $services = Service::all()->jsonSerialize();
        $modelActivities = Activity::where('wbs_id',$id)->get();

        $activity_not_ok = false;
        for ($i=0; $i < count($modelActivities); $i++) { 
            if($modelActivities[$i]->planned_start_date == null || $modelActivities[$i]->planned_end_date == null || $modelActivities[$i]->weight == null){
                $activity_not_ok = true;
                $i = count($modelActivities)+1;
            }
        }
        if($activity_not_ok){
            return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "Please define planned start date, end date, and weight for ".$wbs->number." activities");
        }

        if(count($modelActivities) > 0){
            $modelBOM = Bom::where('project_id',$project->id)->first();
            $modelRD = ResourceTrx::where('wbs_id',$wbs->id)->get();
            if($modelBOM != null){
                $modelBOMD = $modelBOM->bomDetails;
                foreach ($modelBOMD as $bomd) {
                    $prod_order = ProductionOrder::where('project_id',$project->id)->whereIn('status',[2,0])->get();
                    if(count($prod_order)>0){
                        $prod_order_id = $prod_order->pluck('id')->toArray();
                        $prod_order_details = ProductionOrderDetail::whereIn('production_order_id', $prod_order_id)->where('actual','>',0)->get();
                        $temp_used = 0;
                        foreach ($prod_order_details as $prod_order_detail) {
                            if($bomd->material_id == $prod_order_detail->material_id){
                                $temp_used += $prod_order_detail->quantity;
                            }
                        } 
                        $bomd['used'] = $temp_used;
                    }else{
                        $bomd['used'] = 0;
                    }
                }
            }else{
                $modelBOMD = [];
                return view('production_order.createPrORepair', compact('modelBOMD','wbs','project','materials','resources','services','modelBOM','modelRD','route','modelActivities'));
                // return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "This Project doesn't have BOM");
            }
            if($modelBOM != null){
                return view('production_order.createPrORepair', compact('modelBOMD','wbs','project','materials','resources','services','modelBOM','modelRD','route','modelActivities'));
            }else{                
                $modelBOMD = [];
                return view('production_order.createPrORepair', compact('modelBOMD','wbs','project','materials','resources','services','modelBOM','modelRD','route','modelActivities'));
                // return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "This Project doesn't have BOM");
            }
        }else{
            return redirect()->route('production_order_repair.selectWBS',$wbs->project_id)->with('error', "This WBS doesn't have Activities");
        }  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = $request->route()->getPrefix();
        $datas = json_decode($request->datas);

        $arrData = $datas->datas;
        $po_number = $this->generatePrONumber();

        DB::beginTransaction();
        try {
            $PrO = new ProductionOrder;
            $PrO->number = $po_number;
            $PrO->project_id = $datas->project_id;
            $PrO->wbs_id = $datas->wbs_id;
            $PrO->status = 1;
            $PrO->user_id = Auth::user()->id;
            $PrO->branch_id = Auth::user()->branch->id;
            $PrO->save();

            $is_repair = false;
            
            if($PrO->project->business_unit_id == 2){
                $is_repair = true;
            }

            $status = 0;
            if($route == "/production_order_repair"){
                if(count($datas->materials) > 0){
                    foreach($datas->materials as $material){
                        $bom_prep = BomPrep::find($material->bom_prep_id);
                        if($material->material_id != ""){
                            $PrOD = new ProductionOrderDetail;
                            $PrOD->production_order_id = $PrO->id;
                            $PrOD->material_id = $material->material_id;
                            $PrOD->quantity = $material->quantity;
                            $PrOD->source = $material->source;
                            $PrOD->save();
                        }
                    }
                }
            }elseif($route == "/production_order"){
                if(count($datas->materials) > 0){
                    foreach($datas->materials as $material){
                        if($material->material_id != ""){
                            $PrOD = new ProductionOrderDetail;
                            $PrOD->production_order_id = $PrO->id;
                            $PrOD->material_id = $material->material_id;
                            $PrOD->quantity = $material->quantity;
                            $PrOD->source = $material->source;
                            $PrOD->material_type = $material->type;
                            $PrOD->save();
                        }
                    }
                }

            }
            
            if(count($datas->resources) > 0){
                foreach($datas->resources as $resource){
                    $existing = ProductionOrderDetail::where('production_order_id',$PrO->id)->where('resource_id' , $resource->id)->first();
                    if($existing != null){
                        $existing->quantity += $resource->quantity;
                        $existing->update();
                    }else{
                        $PrOD = new ProductionOrderDetail;
                        if($resource->resource_detail_id != null){
                            $PrOD->resource_detail_id = $resource->resource_detail_id;
                        }
                        $PrOD->category_id = $resource->category_id;
                        $PrOD->production_order_id = $PrO->id;
                        $PrOD->resource_id = $resource->resource_id;
                        $PrOD->trx_resource_id = $resource->id;
                        $PrOD->quantity = $resource->quantity;
                        $PrOD->save();
                    }
                }
            }

            foreach($arrData as $data){
                $data->type = "Material";
                if($data->type == "Material"){
                    $existing = ProductionOrderDetail::where('production_order_id',$PrO->id)->where('material_id' , $data->id)->first();
                    if($existing != null){
                        $existing->quantity += $data->quantity;
                        $existing->update();
                    }else{
                        $PrOD = new ProductionOrderDetail;
                        $PrOD->production_order_id = $PrO->id;
                        $PrOD->material_id = $data->id;
                        $PrOD->quantity = $data->quantity;
                        $PrOD->source = 'Stock';
                        $PrOD->save();
                    }
                }elseif($data->type == "Resource"){
                    $existing = ProductionOrderDetail::where('production_order_id',$PrO->id)->where('resource_id' , $data->id)->first();
                    if($existing != null){
                        $existing->quantity += $data->quantity;
                        $existing->update();
                    }else{
                        $PrOD = new ProductionOrderDetail;
                        $PrOD->production_order_id = $PrO->id;
                        $PrOD->resource_id = $data->id;
                        $PrOD->quantity = $data->quantity;
                        $PrOD->save();
                    }
                }
            }
            DB::commit();
            if($route == "/production_order"){
                return redirect()->route('production_order.show',$PrO->id)->with('success', 'Production Order Created');
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.show',$PrO->id)->with('success', 'Production Order Created');
            }
        } catch (\Exception $e) {
            DB::rollback();
            if($route == "/production_order"){
                return redirect()->route('production_order.create',$datas->wbs_id)->with('error', $e->getMessage());
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.create',$datas->wbs_id)->with('error', $e->getMessage());
            }
        }
    }

    public function storeRelease(Request $request){
        $route = $request->route()->getPrefix();
        $datas = json_decode($request->datas);
        $pro_id = $datas->modelPrO->id;
        $modelPrO = ProductionOrder::findOrFail($pro_id);
        DB::beginTransaction();
        try {
            $mr_object = [];
            foreach($modelPrO->productionOrderDetails as $prod){
                if($prod->quantity == 0){
                    $prod->delete();
                }else{
                    foreach ($datas->materials as $material) {
                        if($prod->material_id == $material->material_id){
                            if($material->allocated == "" || $material->allocated <= 0){
                                $prod->delete();
                            }else{
                                $prod->quantity = $material->allocated;
                                $prod->update();
                                if($material->material_type == "Planned"){
                                    array_push($mr_object,$prod);
                                }
                            }
                        }
                    }
                }
            }

            $modelPrO->status = 2;
            $modelPrO->update();

            foreach($datas->resources as $resource){
                $PrOD = new ProductionOrderDetail;
                $PrOD->production_order_id = $pro_id;
                $PrOD->production_order_detail_id = $resource->id;
                $PrOD->resource_id = $resource->resource_id;
                $PrOD->resource_detail_id = $resource->trx_resource_id;
                $PrOD->quantity = 1;
                $PrOD->status = "UNACTUALIZED";
                $PrOD->save();

                $RD = ResourceDetail::findOrFail($resource->trx_resource_id);
                $RD->status = 2;
                $RD->update();
            }

            if(count($mr_object)>0){
                $this->createMR($mr_object);
            }

            DB::commit();
            if($route == "/production_order"){
                return redirect()->route('production_order.showRelease',$modelPrO->id)->with('success', 'Production Order Released');
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.showRelease',$modelPrO->id)->with('success', 'Production Order Released');
            }
        }catch (\Exception $e) {
            DB::rollback();
            if($route == "/production_order"){
                return redirect()->route('production_order.selectProjectRelease')->with('error', $e->getMessage());
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.selectProjectRelease')->with('error', $e->getMessage());
            }
        }
    }

    public function storeReleaseRepair(Request $request){
        $datas = json_decode($request->datas);
        $pro_id = $datas->modelPrOD[0]->production_order_id;
        $modelPrO = ProductionOrder::findOrFail($pro_id);
        DB::beginTransaction();
        try {
            $mr_object = [];
            foreach($modelPrO->productionOrderDetails as $prod){
                if($prod->quantity == 0){
                    $prod->delete();
                }else{
                    foreach ($datas->materials as $material) {
                        if($prod->material_id == $material->material_id){
                            if($material->allocated == "" || $material->allocated <= 0){
                                $prod->delete();
                            }else{
                                $prod->quantity = $material->allocated;
                                $prod->update();
                                array_push($mr_object,$prod);
                            }
                        }
                    }
                }

            }
            $modelPrO->status = 2;
            $modelPrO->update();

            foreach($datas->resources as $resource){
                $PrOD = new ProductionOrderDetail;
                $PrOD->production_order_id = $pro_id;
                $PrOD->production_order_detail_id = $resource->id;
                $PrOD->resource_id = $resource->resource_id;
                $PrOD->resource_detail_id = $resource->trx_resource_id;
                $PrOD->quantity = 1;
                $PrOD->status = "UNACTUALIZED";
                $PrOD->save();

                $RD = ResourceDetail::findOrFail($resource->trx_resource_id);
                $RD->status = 2;
                $RD->update();
            }

            if(count($mr_object)>0){
                $this->createMR($mr_object);
            }

            DB::commit();
            return redirect()->route('production_order_repair.showRelease',$modelPrO->id)->with('success', 'Production Order Released');
        }catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('production_order_repair.selectProjectRelease')->with('error', $e->getMessage());
        }
    }

    public function storeConfirm(Request $request){
        $route = $request->route()->getPrefix();
        $datas = json_decode($request->datas);
        $pro_id = $datas->modelPrO->id;
        $modelPrO = ProductionOrder::findOrFail($pro_id);
        DB::beginTransaction();
        try {
            // $statusAll = $modelPrO->wbs->activities->groupBy('status');
            // $notDone = true;
            // foreach($statusAll as $key => $status){
            //     if($key == 1){
            //         $notDone = false;
            //     }
            // }
            // if($notDone){
            //     $modelPrO->status = 0;
            //     $modelPrO->save();
            // }else{
            //     $modelPrO->status = 2;
            //     $modelPrO->save();
            // }

            // foreach ($datas->materials as  $material) {
            //     $prod = ProductionOrderDetail::find($material->id);
            //     $prod->actual += $material->quantity;
            //     $prod->update();
            // }

            if($datas->data_changed){
                foreach ($datas->materials as $material) {
                    $prod = ProductionOrderDetail::find($material->id);

                    if(count($material->deleted_returned_material)>0){
                        foreach ($material->deleted_returned_material as $prod_return) {
                            $prod_return_ref = ProductionOrderReturn::find($prod_return);
                            if($prod_return_ref->type == "Other BOM"){
                                $bom_detail_ref = $prod_return_ref->bomDetail;
                                $prod_return_ref->delete();
                                $bom_detail_ref->delete();
                            }else if($prod_return_ref->type == "Storage"){
                                $GRD = GoodsReceiptDetail::find($prod_return_ref->goods_receipt_detail_id);
                                $prod_return_ref->delete();
                                $GR = $GRD->goodsReceipt;
                                $this->reduceStock($GRD->material_id, $GRD->quantity);
                                $this->reduceSlocDetail($GRD->material_id, $GRD->storage_location_id,$GRD->quantity);
                                $GRD->delete();
                                if(count($GR->goodsReceiptDetails)==0){
                                    $GR->delete();
                                }
                            }
                        }
                    }
                    
                    if(count($material->returned_materials)>0){
                        $GR = GoodsReceipt::where('production_order_id', $modelPrO->id)->first();
                        if($GR == null){
                            $gr_number = $this->generateGRNumber();
                            $GR = new GoodsReceipt;
                            $GR->number = $gr_number;
                            $GR->business_unit_id = 2;
                            $GR->production_order_id = $modelPrO->id;
                            $GR->type = 1;
                            $GR->description = "AUTO CREATE GR FROM PRODUCTION ORDER";
                            $GR->branch_id = Auth::user()->branch->id;
                            $GR->user_id = Auth::user()->id;
                            $GR->save();   
                        }
                        
                        foreach($material->returned_materials as $data){
                            if($data->new){
                                if($data->bom_id != ""){
                                    $bom_ref = Bom::find($data->bom_id);
                                    $bom_detail_input = new BomDetail;
                                    $bom_detail_input->bom_id = $bom_ref->id;
                                    $bom_detail_input->material_id = $data->material_id;
                                    $bom_detail_input->quantity = $data->quantity;
                                    $bom_detail_input->source = "Stock";
                                    $bom_detail_input->type = "Offcut";
                                    $bom_detail_input->save();
                                }
    
                                if($data->id == null){
                                    if($data->quantity >0 && $data->sloc_id != ""){
                                        $GRD = new GoodsReceiptDetail;
                                        $GRD->goods_receipt_id = $GR->id;
                                        $GRD->production_order_detail_id = $prod->id;
                                        if($data->received_date != ""){
                                            $received_date = DateTime::createFromFormat('d-m-Y', $data->received_date);
                                            $GRD->received_date = $received_date->format('Y-m-d');
                                        }
                                        $GRD->quantity = $data->quantity; 
                                        $GRD->material_id = $data->material_id;
                                        $GRD->storage_location_id = $data->sloc_id;
                                        $GRD->item_OK = 1;
                                        $GRD->save();
                                        
                                        $this->updateStock($data->material_id, $data->quantity);
                                        $this->updateSlocDetail($data->material_id, $data->sloc_id,$data->quantity);
                                    }
                                    
                                    $prod_return = new ProductionOrderReturn;
                                    $prod_return->type = "Storage";
                                    if($data->bom_id != ''){
                                        $prod_return->type = "Other BOM";
                                        $prod_return->bom_detail_id = $bom_detail_input->id;
                                    }
                                    $prod_return->production_order_detail_id = $prod->id;
                                    $prod_return->material_id = $data->material_id;
                                    $prod_return->storage_location_id = $data->sloc_id != "" ? $data->sloc_id : null;
                                    $prod_return->quantity = $data->quantity; 
                                    $prod_return->goods_receipt_detail_id = isset($GRD) ? $GRD->id : null; 
                                    $prod_return->save();
                                }
                            }
                        }
                    }
    
                }
            }

            foreach($datas->resources as $resource){
                $prod = ProductionOrderDetail::find($resource->id);
                $moraleNotesJson = json_encode($resource->morale);
                $prod->morale = $moraleNotesJson;
                if($resource->status == "ACTUALIZED"){
                    $prod->performance = $resource->performance;
                    $prod->performance_uom_id = $resource->performance_uom_id;
                    $prod->usage = $resource->usage;
                    if($resource->resource_detail->category_id == 0){
                        $prod->actual = $resource->actual;
                    }
                    $prod->status = "ACTUALIZED";
                    $prod->update();

                    $resource_detail_id = $prod->resource_detail_id;
                    $status = 0;
                    $modelProdDetail = ProductionOrderDetail::where('resource_detail_id',$resource_detail_id)->where('status','UNACTUALIZED')->get();
                    if(count($modelProdDetail) > 0){
                        $status = 1;
                    }
                    if($status == 0){
                        $modelRD = ResourceDetail::find($resource_detail_id);
                        $modelRD->status = 1;
                        $modelRD->update();
                    }
                }elseif($resource->status == "UNACTUALIZED"){
                    $prod->performance = ($resource->performance != "") ? $resource->performance : null;
                    $prod->performance_uom_id = ($resource->performance_uom_id != "") ? $resource->performance_uom_id : null;
                    $prod->usage = ($resource->usage != "") ? $resource->usage : null;
                    if($resource->resource_detail->category_id == 0){
                        $prod->actual = ($resource->actual != "") ? $resource->actual : null;
                    }
                    $prod->status = "UNACTUALIZED";
                    $prod->update();

                    $resource_detail_id = $prod->resource_detail_id;
                    $modelRD = ResourceDetail::find($resource_detail_id);
                    $modelRD->status = 2;
                    $modelRD->update();
                }
            }
            
            DB::commit();
            if($route == "/production_order"){
                return redirect()->route('production_order.showConfirm',$modelPrO->id)->with('success', 'Production Order Confirmed');
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.showConfirm',$modelPrO->id)->with('success', 'Production Order Confirmed');
            }
        }catch (\Exception $e) {
            DB::rollback();
            if($route == "/production_order"){
                return redirect()->route('production_order.selectProjectConfirm')->with('error', $e->getMessage());
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.selectProjectConfirm')->with('error', $e->getMessage());
            }
        }
    }

    public function storeConfirmRepair(Request $request){
        $route = $request->route()->getPrefix();
        $datas = json_decode($request->datas);
        if(count($datas->modelPrOD)==0){
            $wbs = $datas->modelPrO->wbs;
            $wbs = WBS::find($wbs->id);

            $statusAll = $wbs->activities->groupBy('status');
            $notDone = true;
            foreach($statusAll as $key => $status){
                if($key == 1){
                    $notDone = false;
                }
            }
            $modelPrO = ProductionOrder::find($datas->modelPrO->id);
            if($notDone){
                $modelPrO->status = 0;
                $modelPrO->save();
            }else{
                $modelPrO->status = 2;
                $modelPrO->save();
            }

            if($route == "/production_order"){
                return redirect()->route('production_order.showConfirm',$datas->modelPrO->id)->with('success', 'Production Order Confirmed');
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.showConfirm',$datas->modelPrO->id)->with('success', 'Production Order Confirmed');
            }
        }
        $pro_id = $datas->modelPrOD[0]->production_order_id;
        $modelPrO = ProductionOrder::findOrFail($pro_id);

        DB::beginTransaction();
        try {
            $statusAll = $modelPrO->wbs->activities->groupBy('status');
            $notDone = true;
            foreach($statusAll as $key => $status){
                if($key == 1){
                    $notDone = false;
                }
            }
            if($notDone){
                $modelPrO->status = 0;
                $modelPrO->save();
            }else{
                $modelPrO->status = 2;
                $modelPrO->save();
            }
            if($datas->data_changed){
                foreach ($datas->materials as $material) {
                    $prod = ProductionOrderDetail::find($material->id);
                    if($material->dimension_uom_id != null){
                        if($prod->length == null){
                            if($prod->actual != null){
                                $prod->actual += $material->quantity > 0 ? $material->quantity : 0;
                            }else{
                                $prod->actual = $material->quantity > 0 ? $material->quantity : null;
                            }
                            $prod->update();
                        }
                        if($material->weight > 0){
                            $PrOD = new ProductionOrderDetail;
                            $PrOD->production_order_id = $modelPrO->id;
                            $PrOD->production_order_detail_id = $prod->id;
                            $PrOD->material_id = $material->id;
                            $PrOD->length = $material->lengths;
                            $PrOD->width = $material->width;
                            $PrOD->height = $material->height;
                            $PrOD->weight = $material->weight;
                            $PrOD->dimension_uom_id = $prod->dimension_uom_id;
                            $PrOD->quantity = $material->quantity;
                            $PrOD->source = 'Stock';
                            $PrOD->save();
                        }
                    }else{
                        if($prod->actual != null){
                            $prod->actual += $material->quantity > 0 ? $material->quantity : 0;
                        }else{
                            $prod->actual = $material->quantity > 0 ? $material->quantity : null;
                        }
                        $prod->update();
                    }
                    
                    
    
                    if(count($material->deleted_returned_material)>0){
                        foreach ($material->deleted_returned_material as $GRD_id) {
                            $GRD = GoodsReceiptDetail::find($GRD_id);
                            $GR = $GRD->goodsReceipt;
                            $this->reduceStock($GRD->material_id, $GRD->quantity);
                            $this->reduceSlocDetail($GRD->material_id, $GRD->storage_location_id,$GRD->quantity);
                            $GRD->delete();
                            if(count($GR->goodsReceiptDetails)==0){
                                $GR->delete();
                            }
                        }
                    }
                    
                    if(count($material->returned_materials)>0){
                        $GR = GoodsReceipt::where('production_order_id', $modelPrO->id)->first();
                        if($GR == null){
                            $gr_number = $this->generateGRNumber();
                            $GR = new GoodsReceipt;
                            $GR->number = $gr_number;
                            $GR->business_unit_id = 2;
                            $GR->production_order_id = $modelPrO->id;
                            $GR->type = 1;
                            $GR->description = "AUTO CREATE GR FROM PRODUCTION ORDER";
                            $GR->branch_id = Auth::user()->branch->id;
                            $GR->user_id = Auth::user()->id;
                            $GR->save();   
                        }
                        
                        foreach($material->returned_materials as $data){
                            if($data->id == null){
                                if($data->quantity >0 && $data->sloc_id != ""){
                                    $GRD = new GoodsReceiptDetail;
                                    $GRD->goods_receipt_id = $GR->id;
                                    $GRD->production_order_detail_id = $prod->id; 
                                    if($data->received_date != ""){
                                        $received_date = DateTime::createFromFormat('d-m-Y', $data->received_date);
                                        $GRD->received_date = $received_date->format('Y-m-d');
                                    }
                                    $GRD->quantity = $data->quantity; 
                                    $GRD->material_id = $data->material_id;
                                    $GRD->storage_location_id = $data->sloc_id;
                                    $GRD->item_OK = 1;
                                    $GRD->save();
                                    
                                    $this->updateStock($data->material_id, $data->quantity);
                                    $this->updateSlocDetail($data->material_id, $data->sloc_id,$data->quantity);
                                }
                            }
                        }
                    }
    
                }
            }

            foreach($datas->resources as $resource){
                $prod = ProductionOrderDetail::find($resource->id);
                $moraleNotesJson = json_encode($resource->morale);
                $prod->morale = $moraleNotesJson;
                if($resource->status == "ACTUALIZED"){
                    $prod->performance = $resource->performance;
                    $prod->performance_uom_id = $resource->performance_uom_id;
                    $prod->usage = $resource->usage;
                    if($resource->resource_detail->category_id == 0){
                        $prod->actual = $resource->actual;
                    }
                    $prod->status = "ACTUALIZED";
                    $prod->update();

                    $resource_detail_id = $prod->resource_detail_id;
                    $status = 0;
                    $modelProdDetail = ProductionOrderDetail::where('resource_detail_id',$resource_detail_id)->where('status','UNACTUALIZED')->get();
                    if(count($modelProdDetail) > 0){
                        $status = 1;
                    }
                    if($status == 0){
                        $modelRD = ResourceDetail::find($resource_detail_id);
                        $modelRD->status = 1;
                        $modelRD->update();
                    }
                }elseif($resource->status == "UNACTUALIZED"){
                    $prod->performance = ($resource->performance != "") ? $resource->performance : null;
                    $prod->performance_uom_id = ($resource->performance_uom_id != "") ? $resource->performance_uom_id : null;
                    $prod->usage = ($resource->usage != "") ? $resource->usage : null;
                    if($resource->resource_detail->category_id == 0){
                        $prod->actual = ($resource->actual != "") ? $resource->actual : null;
                    }
                    $prod->status = "UNACTUALIZED";
                    $prod->update();

                    $resource_detail_id = $prod->resource_detail_id;
                    $modelRD = ResourceDetail::find($resource_detail_id);
                    $modelRD->status = 2;
                    $modelRD->update();
                }
            }
            
            DB::commit();
            if($route == "/production_order"){
                return redirect()->route('production_order.showConfirm',$modelPrO->id)->with('success', 'Production Order Confirmed');
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.showConfirm',$modelPrO->id)->with('success', 'Production Order Confirmed');
            }
        }catch (\Exception $e) {
            DB::rollback();
            if($route == "/production_order"){
                return redirect()->route('production_order.selectProjectConfirm')->with('error', $e->getMessage());
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.selectProjectConfirm')->with('error', $e->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $route = $request->route()->getPrefix();
        $modelPrO = ProductionOrder::findOrFail($id);
        $modelActivities = $modelPrO->wbs->activities;

        return view('production_order.show', compact('modelPrO','route','modelActivities'));
    }

    public function createMR($modelPrOD){
        $mr_number = $this->generateMRNumber();
        $prod_order = ProductionOrder::findOrFail($modelPrOD[0]->production_order_id);
        $project_id = $prod_order->project_id;

        $MR = new MaterialRequisition;
        $MR->number = $mr_number;
        $MR->project_id = $project_id;
        $MR->description = "AUTO CREATE MR FROM PRODUCTION ORDER";
        $MR->type = 1;
        $MR->user_id = Auth::user()->id;
        $MR->branch_id = Auth::user()->branch->id;
        $MR->save();

        foreach($modelPrOD as $PrOD){
            if($PrOD->material_id != "" || $PrOD->material_id != null){
                if($PrOD->source == "Stock"){
                    $MRD = new MaterialRequisitionDetail;
                    $MRD->material_requisition_id = $MR->id;
                    $MRD->quantity = $PrOD->quantity;
                    $MRD->issued = 0;
                    $MRD->material_id = $PrOD->material_id;
                    $MRD->wbs_id = $prod_order->wbs_id;
                    $MRD->save();
                }
            }
        }
    }
    public function editPrO(Request $request, $id)
    {
        $route = $request->route()->getPrefix();
        $pro = ProductionOrder::find($id);
        $modelPrOD = ProductionOrderDetail::where('production_order_id',$pro->id)->get();
        $wbs = $pro->wbs;
        $project = $pro->wbs->project;
        $materials = Material::all()->jsonSerialize();
        $services = Service::all()->jsonSerialize();
        $modelActivities = $wbs->activities;
        $modelBOM = Bom::where('wbs_id',$wbs->id)->first();
        
        $prod = $pro->productionOrderDetails;
        
        $prod_materials = $prod->filter(function ($item) {
            return $item['material_id'] !== null && $item['source'] !== "WIP";
        });
        $prod_resources = $prod->filter(function ($item) {
            return $item['resource_id'] !== null;
        });
        $prod_services = $prod->filter(function ($item) {
            return $item['service_id'] !== null;
        });

        $modelBOMD_material = $modelBOM->bomDetails->filter(function ($item) {
            return $item['material_id'] !== null && $item['source'] !== "WIP";
        });
        $modelBOMD_service = $modelBOM->bomDetails->filter(function ($item) {
            return $item['service_id'] !== null;
        });

        $additionalItems = Collection::make();
        //Materials
        foreach($prod_materials as $keyProd => $prod){
            if(count($modelBOMD_material)> 0){
                foreach ($modelBOMD_material as $key => $bomD) {
                    if($prod->material_id == $bomD->material_id){
                        if($prod->quantity > $bomD->quantity){
                            $additionalItems->push([
                                "code" => $prod->material->code , 
                                "description" => $prod->material->description,
                                "id" => $prod->material->id,
                                "name" => $prod->material->name,
                                "quantity" => number_format($prod->quantity - $bomD->quantity,2),
                                "type" => "Material",
                                "unit" => $prod->material->uom->unit,
                            ]);
                        }
                        $prod_materials->forget($keyProd);
                    }       
                }
            }else{
                $additionalItems->push([
                    "code" => $prod->material->code , 
                    "description" => $prod->material->description,
                    "id" => $prod->material->id,
                    "name" => $prod->material->name,
                    "quantity" => number_format($prod->quantity,2),
                    "type" => "Material",
                    "unit" => $prod->material->uom->unit,
                ]);
                $prod_materials->forget($keyProd);
            }
        }

        foreach($prod_materials as $prod){
            $additionalItems->push([
                "code" => $prod->material->code , 
                "description" => $prod->material->description,
                "id" => $prod->material->id,
                "name" => $prod->material->name,
                "quantity" => number_format($prod->quantity,2),
                "type" => "Material",
                "unit" => $prod->material->uom->unit,
            ]);
        }

        //Services
        foreach($prod_services as $keyProd => $prod){
            if(count($modelBOMD_service)> 0){
                foreach ($modelBOMD_service as $key => $bomD) {
                    if($prod->service_id == $bomD->service_id){
                        if($prod->quantity > $bomD->quantity){
                            $additionalItems->push([
                                "code" => $prod->service->code , 
                                "description" => $prod->service->description,
                                "id" => $prod->service->id,
                                "name" => $prod->service->name,
                                "quantity" => number_format($prod->quantity - $bomD->quantity),
                                "type" => "Service",
                            ]);
                        }
                        $prod_services->forget($keyProd);
                    }       
                }
            }else{
                $additionalItems->push([
                    "code" => $prod->service->code , 
                    "description" => $prod->service->description,
                    "id" => $prod->service->id,
                    "name" => $prod->service->name,
                    "quantity" => number_format($prod->quantity),
                    "type" => "Service",
                ]);
                $prod_services->forget($keyProd);
            }
        }

        foreach($prod_services as $prod){
            $additionalItems->push([
                "code" => $prod->service->code , 
                "description" => $prod->service->description,
                "id" => $prod->service->id,
                "name" => $prod->service->name,
                "quantity" => number_format($prod->quantity),
                "type" => "Service",
            ]);
        }

        //Resources
        $resources = Collection::make();
        foreach($modelPrOD as $prOD){
            if($prOD->quantity > 0){
                if($prOD->resource_id != ""){
                    $qty =  $prOD->quantity;
                    for ($x = 0; $x < $qty; $x++) {
                        $resources->push([
                            "id" => $prOD->id , 
                            "resource" => [
                                "code" => $prOD->resource->code,
                                "name" => $prOD->resource->name,
                                "description" => $prOD->resource->description,
                                "category_id" => $prOD->category_id,
                            ],
                            "resource_detail" =>[
                                "code" => ($prOD->resourceDetail) ? $prOD->resourceDetail->code : null,
                                "id" => ($prOD->resourceDetail) ? $prOD->resourceDetail->id : null,
                            ],
                            "quantity" => $prOD->quantity,
                            "resource_id" => $prOD->resource_id,
                            "trx_resource_id" => $prOD->trx_resource_id,
                            "status" => null,
                        ]);
                    } 
                }
            }
        }

        if($modelBOM != null){
            return view('production_order.edit', compact('pro','additionalItems','wbs','project','materials','resources','services','modelBOM','modelRD','route','modelActivities'));
        }else{
            if($route == "/production_order"){
                return redirect()->route('production_order.indexPrO',$wbs->project_id)->with('error', "This WBS doesn't have BOM");
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.indexPrO',$wbs->project_id)->with('error', "This WBS doesn't have BOM");
            }
        }
    }

    public function updatePrO(Request $request, $id)
    {
        $route = $request->route()->getPrefix();
        $datas = json_decode($request->datas);
        $arrData = $datas->datas;
        $PrO = ProductionOrder::find($id);
        $modelBOM = $PrO->wbs->Bom;
        $modelRD = $PrO->wbs->resourceTrxs;
        $PrOD = $PrO->productionOrderDetails->where('source','!=','WIP');

        $ProD_materials = $PrOD->filter(function ($item) {
            return $item['material_id'] !== null;
        });

        $ProD_resources = $PrOD->filter(function ($item) {
            return $item['resource_id'] !== null;
        });

        $ProD_services = $PrOD->filter(function ($item) {
            return $item['service_id'] !== null;
        });

        $modelBOMD_material = $modelBOM->bomDetails->filter(function ($item) {
            return $item['material_id'] !== null && $item['source'] !== "WIP";
        });
        $modelBOMD_service = $modelBOM->bomDetails->filter(function ($item) {
            return $item['service_id'] !== null;
        });

        DB::beginTransaction();
        try {
            
            foreach ($ProD_materials as $prod) {
                $prod->quantity = 0;
                foreach ($modelBOMD_material as $bomD) {
                    if($prod->material_id == $bomD->material_id){
                        $prod->quantity = $bomD->quantity;
                    }
                }
                $prod->update();
            }

            foreach ($ProD_resources as $prod) {
                $prod->quantity = 0;
                foreach ($modelRD as $resource) {
                    if($prod->resource_id == $resource->resource_id){
                        $prod->quantity = $resource->quantity;
                    }
                }
                $prod->update();
            }

            foreach ($ProD_services as $prod) {
                $prod->quantity = 0;
                foreach ($modelBOMD_service as $bomD) {
                    if($prod->service_id == $bomD->service_id){
                        $prod->quantity = $bomD->quantity;
                    }
                }
                $prod->update();
            }
            foreach($arrData as $data){
                if($data->type == "Material"){
                    $existing = ProductionOrderDetail::where('production_order_id',$PrO->id)->where('material_id' , $data->id)->first();
                    if($existing != null){
                        $existing->quantity += $data->quantity;
                        $existing->update();
                    }else{
                        $PrOD = new ProductionOrderDetail;
                        $PrOD->production_order_id = $PrO->id;
                        $PrOD->material_id = $data->id;
                        $PrOD->quantity = $data->quantity;
                        $PrOD->source = 'Stock';
                        $PrOD->save();
                    }
                }elseif($data->type == "Resource"){
                    $existing = ProductionOrderDetail::where('production_order_id',$PrO->id)->where('resource_id' , $data->id)->first();
                    if($existing != null){
                        $existing->quantity += $data->quantity;
                        $existing->update();
                    }else{
                        $PrOD = new ProductionOrderDetail;
                        $PrOD->production_order_id = $PrO->id;
                        $PrOD->resource_id = $data->id;
                        $PrOD->quantity = $data->quantity;
                        $PrOD->save();
                    }
                }elseif($data->type == "Service"){
                    $existing = ProductionOrderDetail::where('production_order_id',$PrO->id)->where('service_id' , $data->id)->first();
                    if($existing != null){
                        $existing->quantity += $data->quantity;
                        $existing->update();
                    }else{
                        $PrOD = new ProductionOrderDetail;
                        $PrOD->production_order_id = $PrO->id;
                        $PrOD->service_id = $data->id;
                        $PrOD->quantity = $data->quantity;
                        $PrOD->save();
                    }
                }
            }
            // resource
            foreach($PrO->productionOrderDetails as $prod){
                if($prod->resource_id != null && $prod->resource_id != ""){
                    if($prod->resource_detail_id != null && $prod->resource_detail_id != ""){
                        $RD = ResourceDetail::findOrFail($prod->resource_detail_id);
                        $RD->status = 1;
                        $RD->update();
                    }
                    $prod->delete();
                }
            }
            
            foreach($datas->resources as $resource){
                $PrOD = new ProductionOrderDetail;
                $PrOD->production_order_id = $PrO->id;
                $PrOD->resource_id = $resource->resource_id;
                $PrOD->resource_detail_id = $resource->resource_detail->id;
                $PrOD->trx_resource_id = $resource->trx_resource_id;
                $PrOD->category_id = $resource->resource->category_id;
                $PrOD->quantity = 1;
                $PrOD->status = "UNACTUALIZED";
                $PrOD->save();
                if($resource->resource_detail->id != ""){
                    $RD = ResourceDetail::findOrFail($resource->resource_detail->id);
                    $RD->status = 2;
                    $RD->update();
                }
            }
            DB::commit();
            if($route == "/production_order"){
                return redirect()->route('production_order.show',$PrO->id)->with('success', 'Production Order Updated');
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.show',$PrO->id)->with('success', 'Production Order Updated');
            }
        } catch (\Exception $e) {
            DB::rollback();
            if($route == "/production_order"){
                return redirect()->route('production_order.editPrO',$PrO->id)->with('error', $e->getMessage());
            }elseif($route == "/production_order_repair"){
                return redirect()->route('production_order_repair.editPrO',$PrO->id)->with('error', $e->getMessage());
            }
        }
    }

    //Function
    public function generatePrONumber(){
        $modelPrO = ProductionOrder::orderBy('created_at','desc')->where('branch_id',Auth::user()->branch_id)->first();
        $modelBranch = Branch::where('id', Auth::user()->branch_id)->first();

        $branch_code = substr($modelBranch->code,4,2);
        $number = 1;
        if(isset($modelPrO)){
            $number += intval(substr($modelPrO->number, -6));
        }
        $year = date('y'.$branch_code.'000000');
        $year = intval($year);

        $po_number = $year+$number;
        $po_number = 'PrO-'.$po_number;
        return $po_number;
    }

    public function generateGRNumber(){
        $modelGR = GoodsReceipt::orderBy('id','desc')->where('branch_id',Auth::user()->branch_id)->first();
        $modelBranch = Branch::where('id', Auth::user()->branch_id)->first();

        $branch_code = substr($modelBranch->code,4,2);
		$number = 1;
		if(isset($modelGR)){
            $number += intval(substr($modelGR->number, -6));
		}
        $year = date('y'.$branch_code.'000000');
        $year = intval($year);

		$gr_number = $year+$number;
        $gr_number = 'GR-'.$gr_number;
		return $gr_number;
    }

    public function updateStock($material_id,$received){
        $modelStock = Stock::where('material_id',$material_id)->first();
        if($modelStock){
            $modelStock->quantity += $received;
            $modelStock->update();
        }else{
            $modelStock = new Stock;
            $modelStock->quantity = $received;
            $modelStock->branch_id = Auth::user()->branch->id;;
            $modelStock->material_id = $material_id;
            $modelStock->save();
        }
    }

    public function reduceStock($material_id,$deleted){
        $modelStock = Stock::where('material_id',$material_id)->first();

        if($modelStock){
            $modelStock->quantity -= $deleted;
            $modelStock->update();
        }
    }

    public function updateSlocDetail($material_id,$sloc_id,$received){
        $modelSlocDetail = StorageLocationDetail::where('material_id',$material_id)->where('storage_location_id',$sloc_id)->first();
        
        if($modelSlocDetail){
            $modelSlocDetail->quantity += $received;
            $modelSlocDetail->update();
        }else{
            $modelSlocDetail = new StorageLocationDetail;
            $modelSlocDetail->quantity = $received;
            $modelSlocDetail->material_id = $material_id;
            $modelSlocDetail->storage_location_id = $sloc_id;
            $modelSlocDetail->save();
        }
    }

    public function reduceSlocDetail($material_id,$sloc_id,$deleted){
        $modelSlocDetail = StorageLocationDetail::where('material_id',$material_id)->where('storage_location_id',$sloc_id)->first();
        if($modelSlocDetail){
            $modelSlocDetail->quantity -= $deleted;
            $modelSlocDetail->update();
        }
    }

    //Buat ngambil wbs paling tinggi
    public function getTopWbs($wbs)
    {
        if ($wbs) {
            if($wbs->wbs){
                return self::getTopWbs($wbs->wbs);
            }else{
                return $wbs;
            }
        }
    }

    //API
    public function getMaterialAPI($id){

        return response(Material::where('id',$id)->with('uom')->first()->jsonSerialize(), Response::HTTP_OK);
    }

    public function getResourceAPI($id){

        return response(Resource::findOrFail($id)->jsonSerialize(), Response::HTTP_OK);
    }

    public function getServiceAPI($id){

        return response(Service::findOrFail($id)->jsonSerialize(), Response::HTTP_OK);
    }

    public function getProjectPOApi($id){
        $project = Project::where('id',$id)->with('ship','customer','wbss')->first()->jsonSerialize();

        return response($project, Response::HTTP_OK);
    }

    public function getPOApi($id){
        $modelPOs = ProductionOrder::where('project_id',$id)->with('project','wbs')->get()->jsonSerialize();

        return response($modelPOs, Response::HTTP_OK);
    }

    public function getStockAPI($id){
        $stock = Stock::where('material_id',$id)->first();
        if($stock){
            $stock = json_encode($stock);
        }else{
            $stock = [];
        }

        return response($stock, Response::HTTP_OK);
    }

    public function getProjectInvAPI($id){
        $stock = ProjectInventory::where('material_id',$id)->first();
        if($stock){
            $stock = json_encode($stock);
        }else{
            $stock = [];
        }

        return response($stock, Response::HTTP_OK);
    }

    public function getTrxResourceAPI($id,$jsonResource,$category_id){
        $jsonResource = json_decode($jsonResource);
        $resource = ResourceDetail::where('resource_id',$id)->where('status','!=',0)->where('category_id',$category_id)->whereNotIn('id',$jsonResource)->with('resource')->get()->jsonSerialize();

        return response($resource, Response::HTTP_OK);
    }

    public function generateMRNumber(){
        $modelMR = MaterialRequisition::orderBy('created_at','desc')->where('branch_id',Auth::user()->branch_id)->first();
        $modelBranch = Branch::where('id', Auth::user()->branch_id)->first();

        $branch_code = substr($modelBranch->code,4,2);
		$number = 1;
		if(isset($modelMR)){
            $number += intval(substr($modelMR->number, -6));
		}
        $year = date('y'.$branch_code.'000000');
        $year = intval($year);

		$mr_number = $year+$number;
        $mr_number = 'MR-'.$mr_number;
		return $mr_number;
    }

    public function getPouAPI($id){

        return response(ProductionOrderUpload::where('production_order_id',$id)->with('user')->get()->jsonSerialize(), Response::HTTP_OK);
    }
}
