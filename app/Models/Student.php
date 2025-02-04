<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'father_name',
        'mother_name',
        'dob',
        'gender',
        'phone',
        'class',
        'school',
        'subjects',
    ];
}
