<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'qty', 'expire_date', 'phurcse_price','sale_price' , 'detail', 'expire_date','unit', 'created_by' , 'status' , 'created_name' , 'sale_madicine'
        ];

    public function madicineStock() : HasMany
    {
        return $this->hasMany(MadicineStock::class);
    }
}
