<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\Category as Authenticatable;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model

{
    use HasFactory;
    protected $fillable = ['name'];

    public function beverages()
    {
        return $this->hasMany(Beverage::class);
    }
}
