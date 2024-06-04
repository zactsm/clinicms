<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medications = [
            [
                'medID' => '50001',
                'medName' => 'Paracetamol 500mg',
                'medDesc' => 'Medicine for pain and fever.',
                'medDosage' => '2 pills, 3 times a day',
            ],
            [
                'medID' => '50002',
                'medName' => 'Tamiflu 75mg',
                'medDesc' => 'Medicine for flu.',
                'medDosage' => '1 pill, 2 times a day',
            ],
            [
                'medID' => '50003',
                'medName' => 'Strepsils Throat Lozenges',
                'medDesc' => 'Medicine for temporary relief of sore throats.',
                'medDosage' => '1 pill, 2 times a day',
            ],
        ];

        foreach ($medications as $medication) {
            DB::table('medication')->insert($medication);
        }
    }
}
