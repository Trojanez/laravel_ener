<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function subCategory()
    {
        $this->hasOne(SubCategory::class);
    }

    public function products()
    {
        $this->hasMany(Product::class);
    }
}
