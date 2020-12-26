<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    protected const CATEGORIES = [
        'Табачные изделия',
        'Алкогольные напитки',
        'Безалкогольные напитки'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::CATEGORIES as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
