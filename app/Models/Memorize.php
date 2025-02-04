<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Memorize extends Model
{
    use HasFactory;
    protected $table = 'memorizes';
    protected $fillable = ['title', 'description','image'];
}
