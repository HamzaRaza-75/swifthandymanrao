<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MadicineStock extends Model
{
    use HasFactory;

    protected $fillable = ['Phar_id' , 'qty' , 'expire_date' , 'sale_price' , 'phurcse_price' , 'status', 'created_by' , 'created_name'];

    public function pharmacy() : BelongsTo
    {
        return $this->belongsTo(Pharmacy::class);
    }
}
