<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'categories',
        'description',
        'os',
        'price',
    ];

    public function ratings()
    {
        // return $this->hasMany();
    }

    public function reviews()
    {
        // return $this->hasMany();
    }

    public function promos()
    {
        // return $this->hasMany();
    }
}
