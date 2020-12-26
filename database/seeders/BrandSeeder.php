<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    protected const BRANDS = [
        1 => [
            'Marlboro',
            'L&M',
            'Parliament',
            'Bond Street'
        ],
        2 => [
            'Captain Black',
            'Harvest'
        ],
        3 => [
            'Cricket',
            'LION',
            'BIC'
        ],
        4 => [
            'Ровно',
            'Череповец',
            'Борисов'
        ],
        5 => [
            'ТВЕН'
        ],
        6 => [
            'Хлебная слеза',
            'Наша Лiга',
            'Зубровка',
            'Медофф',
            'Nemiroff',
            'Златого'
        ],
        7 => [
            'Жан-Жак',
            'Черноморский',
            'Шабо',
            'Таврия'
        ],
        8 => [
            'Хлебная Слеза',
            'Жан-Жак',
            'Холодный Яр'
        ],
        9 => [
            'BlackLabel',
            'Captain Morgan',
            'Карта Бланка',
            'Баккардi'
        ],
        10 => [
            'Jameson',
            'Олд Роад',
            'Passport Scotch',
            'Вайт i Маккей'
        ],
        11 => [
            'Вiлмор',
            'Дженьюен',
            'Лондон Хiлл'
        ],
        12 => [
            'Jose Cuervo',
            'True Tequila'
        ],
        13 => [
            'Версаль',
            'Saint Remy'
        ],
        14 => [
            'Масандра',
            'Jardin Du Roy',
            'Алазанская долина'
        ],
        15 => [
            'Советское',
            'Севастопольское',
            'Артемiвське'
        ],
        16 => [
            'Балтика',
            'Карлсберг',
            'Десант',
            'Жигулiвське',
            'Зiберт'
        ],
        17 => [
            'Моршинская',
            'Bonaqua',
            'Миргородская'
        ],
        18 => [
            'ОКЗДХ',
            'Sandora'
        ],
        19 => [
            'Coca Cola',
            'Pepsi',
            'Fanta',
            'Sprite'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands', []);
    }
}
