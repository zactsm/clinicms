<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            [
                'recID' => '80001',
                'patientID' => '30001',
                'staffID' => '40001',
                'medID' => '50001',
                'recDiagnosis' => 'Patient is diagnosed with a severe fever.',
                'recDate' => Carbon::parse('2022-07-04')->format('Y-m-d'),
            ],
            [
                'recID' => '80002',
                'patientID' => '30002',
                'staffID' => '40002',
                'medID' => '50002',
                'recDiagnosis' => 'Patient is diagnosed with a very severe fever.',
                'recDate' => Carbon::parse('2020-02-01')->format('Y-m-d'),
            ],
            [
                'recID' => '80003',
                'patientID' => '30003',
                'staffID' => '40003',
                'medID' => '50003',
                'recDiagnosis' => 'Patient is diagnosed with a mild sore throat.',
                'recDate' => Carbon::parse('2024-05-01')->format('Y-m-d'),
            ],
        ];

        foreach ($records as $record) {
            DB::table('medical_record')->insert($record);
        }
    }
}
