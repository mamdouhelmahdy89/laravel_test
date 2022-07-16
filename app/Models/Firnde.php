<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firnde extends Model
{
    use HasFactory;

    protected $fillable = [ 'firnde_name', 'firnde_age' , 'subscrip' , 'is_approved' ];

}


