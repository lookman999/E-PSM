<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technicians extends Model
{
    use HasFactory;

    protected $fillable = [
        'office', 'userID'
    ];
}
