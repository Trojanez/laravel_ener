<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses', [
            'city' => 'Харьков',
            'street' => 'Плехановская',
            'building' => '18',
            'postal_code' => '61001'
        ]);
    }
}
