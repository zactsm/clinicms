<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'suppID' => '10001',
                'suppName' => 'Anti-Sickness Ltd.',
                'suppEmail' => 'antisickness@gmail.com',
                'suppPhoneNo' => '011-22345433',
            ],
            [
                'suppName' => 'Astraveneca',
                'suppEmail' => 'astravnc@gmail.com',
                'suppPhoneNo' => '011-22344433',
                'suppID' => '10002',
            ],
            [
                'suppName' => 'Pharma Supplies',
                'suppEmail' => 'pharma@gmail.com',
                'suppPhoneNo' => '019-27564433',
                'suppID' => '10003',
            ],
        ];

        foreach ($suppliers as $supplier) {
            DB::table('supplier')->insert($supplier);
        }
    }
}
