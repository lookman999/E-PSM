<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $fillable = [
        'faculty', 'course', 'sem_year', 'address', 'psm_title', 'userID', 'sv_name'
    ];

    public function title()
    {
        return $this->hasOne(Title::class, 'stdID','stdID');
    }

    public function detail()
    {
        return $this->belongsTo(users::class, 'stdID', 'userID');
    }
}
