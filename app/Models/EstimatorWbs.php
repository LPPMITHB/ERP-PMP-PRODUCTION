<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstimatorWbs extends Model
{
    protected $table = 'mst_estimator_wbs';

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function costStandards()
    {
        return $this->hasMany('App\Models\EstimatorCostStandard');
    }
}
