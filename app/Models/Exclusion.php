<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exclusion extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function package(){
        return $this->belongsTo(InsuranceRecommendation::class,'package_id','id');
    }
}
