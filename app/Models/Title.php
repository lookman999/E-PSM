<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $primaryKey = 'title_id';

    protected $fillable = [
        'psm_title'
    ];


    public function supervisor()
    {
        return $this->belongsTo(users::class,'svID', 'userID');
    }
    public function supervisor_detail()
    {
        return $this->belongsTo(supervisors::class,'svID', 'userID');
    }

    public function student()
    {
        return $this->belongsTo(users::class,'stdID');
    }

    public function student_detail()
    {
        return $this->belongsTo(users::class,'stdID');
    }

    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'title_id', 'title_id');
    }
}
