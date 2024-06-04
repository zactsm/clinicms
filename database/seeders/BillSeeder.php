<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bills = [
            [
                'billID' => '70001',
                'patientID' => '30001',
                'staffID' => '40001',
                'billAmount' => '120.30',
                'billDate' => Carbon::parse('2022-07-04')->format('Y-m-d'),
            ],
            [
                'billID' => '70002',
                'patientID' => '30002',
                'staffID' => '40002',
                'billAmount' => '45.00',
                'billDate' => Carbon::parse('2020-02-01')->format('Y-m-d'),
            ],
            [
                'billID' => '70003',
                'patientID' => '30003',
                'staffID' => '40003',
                'billAmount' => '100.00',
                'billDate' => Carbon::parse('2024-05-01')->format('Y-m-d'),
            ],
        ];

        foreach ($bills as $bill) {
            DB::table('bill')->insert($bill);
        }
    }
}
