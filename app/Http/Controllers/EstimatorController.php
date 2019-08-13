<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\EstimateWbs;
use App\Models\EstimateCostStandard;
use App\Models\EstimateProfile;
use App\Models\EstimateProfileDetail;
use DB;
use Auth;

class EstimatorController extends Controller
{

    public function indexEstimateWbs()
    {
        $modelWbs = EstimateWbs::all();

        return view('estimator.index_estimate_wbs', compact('modelWbs'));
    }

    public function indexEstimateCostStandard()
    {
        
    }

    public function indexEstimateProfile()
    {
        
    }

    public function createWbs()
    {

    }

    public function createCostStandard()
    {
        
    }

    public function createProfile()
    {
        
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
