<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drink extends Model
{

    
    protected $table = 'drink';
    protected $fillable = [
        'name', 
        'type', 
    ];

    
    const TYPE_COLD = 'cold';
    const TYPE_HOT = 'hot';
    const TYPE_JUICE = 'juice';
}
