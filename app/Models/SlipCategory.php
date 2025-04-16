<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SlipCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'status' , 'value'];

    public function slip(): BelongsTo{
        return $this->belongsTo(Slip::class);
    }
}
