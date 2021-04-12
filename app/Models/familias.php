<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familias extends Model
{
    function alumnos(){
        return $this->belongsToMany('App\alumnos', 'alumnos_id');
    }
}
