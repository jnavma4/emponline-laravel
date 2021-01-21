<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingUnit extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','description','course_id'
    ];

    public  function temario(){
        return $this->morphOne('App\Models\Temario','tema');
    }
}
