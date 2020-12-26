<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    protected const SUB_CATEGORIES = [
        1 => [
            'Сигареты',
            'Сигары',
            'Зажигалки',
            'Спички',
            'Iqos'
        ],
        2 => [
            'Водка',
            'Коньяк',
            'Настойки',
            'Ром',
            'Виски',
            'Джин',
            'Текила',
            'Бренди',
            'Вино',
            'Шампанское',
            'Пиво'
        ],
        3 => [
            'Минеральная вода',
            'Соки',
            'Сладкая вода'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::SUB_CATEGORIES as $category_id => $subCategories) {
            foreach ($subCategories as $subCategory) {
                DB::table('sub_categories', [
                    'category_id' => $category_id,
                    'name' => $subCategory
                ]);
            }
        }
    }
}
