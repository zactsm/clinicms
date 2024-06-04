<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
                'paymentID' => '80001',
                'billID' => '70001',
                'paymentAmount' => '120.30',
                'paymentDate' => Carbon::parse('2022-07-04')->format('Y-m-d'),
            ],
            [
                'paymentID' => '80002',
                'billID' => '70002',
                'paymentAmount' => '45.00',
                'paymentDate' => Carbon::parse('2020-02-01')->format('Y-m-d'),
            ],
            [
                'paymentID' => '80003',
                'billID' => '70003',
                'paymentAmount' => '100.00',
                'paymentDate' => Carbon::parse('2024-05-01')->format('Y-m-d'),
            ],
        ];

        foreach ($payments as $payment) {
            DB::table('payment')->insert($payment);
        }
    }
}
