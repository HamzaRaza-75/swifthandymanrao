<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dector extends Model
{
    use HasFactory;

    protected $table = 'dectors';

    protected $fillable = [
     'status', 'firstname' , 'lastname' , 'phone_num', 'gender', 'education' , 'image' , 'name' , 'status'
      ];

      public function setFirstNameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['lastname'] = ucfirst($value);
    }

}
