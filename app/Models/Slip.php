<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Slip extends Model
{
    use HasFactory;

    protected $fillable = ['name','age', 'slip_num','gender','token_type','cash','dector_id',
    'slip_nums','date','token_By','dector_name' , 'status','sliptime','token_holder','comment'];

    public function doctors() : HasOne
    {
        return $this->hasOne(Dector::class , 'dector_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    public function slipcategory(): HasOne
    {
        return $this->hasOne(SlipCategory::class);
    }
}
