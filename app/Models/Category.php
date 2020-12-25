<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get subCategories for the category
     */
    public function subCategories()
    {
        $this->hasMany(SubCategory::class);
    }
}
