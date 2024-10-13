<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refferance extends Model
{

    use HasFactory;
    protected $fillable = [
        'refFromref_from_id',
        'refFromref_to_id',
        'amount',
        'month',
        'Year',
    ];
}
