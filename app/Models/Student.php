<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


    

    class Student extends Model
{
    protected $fillable = ['class_id', 'name'];

     public function class()
    {
        // Relation to Classes model
        return $this->belongsTo(\App\Models\Classes::class, 'class_id');
    }
}


