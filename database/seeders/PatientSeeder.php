<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patients = [
            [
                'patientID' => '30001',
                'pFName' => 'Mirza',
                'pLName' => 'Darwisy',
                'pDOB' => '2003-01-16',
                'pGender' => 'M',
                'pPhoneNo' => '011-30518240',
                'pAddress' => 'No. 10, 2/5L, Taman Tema, Puchong, Selangor',
            ],
            [
                'patientID' => '30002',
                'pFName' => 'Nur',
                'pLName' => 'Amira',
                'pDOB' => '1999-04-24',
                'pGender' => 'F',
                'pPhoneNo' => '011-76238646',
                'pAddress' => 'No. 5, Jalan 3, Ipoh, Perak',
            ],
            [
                'patientID' => '30003',
                'pFName' => 'Muhammad',
                'pLName' => 'Ali',
                'pDOB' => '2000-12-30',
                'pGender' => 'M',
                'pPhoneNo' => '019-30888240',
                'pAddress' => 'No. 50, 5/3W, Gombak, Selangor',
            ],
        ];

        foreach ($patients as $patient) {
            DB::table('patient')->insert($patient);
        }
    }
}
