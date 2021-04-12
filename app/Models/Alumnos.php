<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    function familias(){
        return $this->belongsToMany('App\familias', 'familia_id');
    }
}
