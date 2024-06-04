<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointments = [
            [
                'aptID' => '60001',
                'patientID' => '30001',
                'staffID' => '40001',
                'aptDate' => Carbon::parse('2022-07-04')->format('Y-m-d'),
                'aptTime' => Carbon::parse('10:30:00')->format('H:i:s'),
            ],
            [
                'aptID' => '60002',
                'patientID' => '30002',
                'staffID' => '40002',
                'aptDate' => Carbon::parse('2020-02-01')->format('Y-m-d'),
                'aptTime' => Carbon::parse('20:30:00')->format('H:i:s'),
            ],
            [
                'aptID' => '60003',
                'patientID' => '30003',
                'staffID' => '40003',
                'aptDate' => Carbon::parse('2024-05-01')->format('Y-m-d'),
                'aptTime' => Carbon::parse('08:45:00')->format('H:i:s'),
            ],
        ];

        foreach ($appointments as $appointment) {
            DB::table('appointment')->insert($appointment);
        }
    }
}
