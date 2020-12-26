<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    /**
     * Get the category for subCategories
     */
    public function category()
    {
        $this->hasOne(Category::class);
    }

    public function brands()
    {
        $this->hasMany(Brand::class);
    }
}
