<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'stdID',
        'name',
        'quantity',
        'status_approval',
        'date_start',
        'date_end'
    ];

    public function student()
    {
        return $this->belongsTo(students::class, 'stdID','stdID');
    }
}
