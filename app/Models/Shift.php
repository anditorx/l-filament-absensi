<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shift extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
    ];
    
}
