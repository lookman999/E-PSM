<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meetings extends Model
{
    use HasFactory;
    protected $fillable = [
        'userID', 'Meeting_Date', 'Meeting_Start','Meeting_End', 'Meeting_Purpose'
    ];
    
}
