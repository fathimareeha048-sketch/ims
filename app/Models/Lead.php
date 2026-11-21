<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'name',
        'phone',
        'email',
        'course',
        'stage',
        'source',
        'follow_up_date',
        'notes',
    ];

    protected $casts = [
        'follow_up_date' => 'date',
    ];
}
