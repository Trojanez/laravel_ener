<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brand()
    {
        $this->hasOne(Brand::class);
    }

    public function warehouse()
    {
        $this->hasOne(Warehouse::class);
    }
}
