<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $table ='event';  
    protected $fillable = [
        'id','nama','lokasi','gambars'
    ];
}
