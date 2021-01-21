<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingUnit extends Model
{
    use HasFactory;
    protected $fillable=[
        'code','name','hours','description','schedule','course_id'
    ];


}
