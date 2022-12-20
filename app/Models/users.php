<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_type', 'password', 'userID', 'name', 'phone', 'email'
    ];

    public function supervisor()
    {
        return $this->hasOne(supervisors::class, 'userID','userID');
    }

    public function student()
    {
        return $this->hasOne(students::class,'stdID', 'userID');
    }
}


