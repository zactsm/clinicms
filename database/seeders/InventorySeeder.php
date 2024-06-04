<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventories = [
            [
                'itemID' => '20001',
                'suppID' => '10001',
                'itemName' => 'Syringes',
                'itemDesc' => 'Used for injections, vaccinations, and blood draws.',
                'itemStock' => '245',
            ],
            [
                'itemID' => '20002',
                'suppID' => '10002',
                'itemName' => 'Bandages',
                'itemDesc' => 'Used for wound care, splinting, and support.',
                'itemStock' => '510',
            ],
            [
                'itemID' => '20003',
                'suppID' => '10003',
                'itemName' => 'Gloves',
                'itemDesc' => 'Worn by healthcare professionals to protect themselves and patients from infection.',
                'itemStock' => '154',
            ],

        ];

        foreach ($inventories as $inventory) {
            DB::table('inventory')->insert($inventory);
        }
    }
}
