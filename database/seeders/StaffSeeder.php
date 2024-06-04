<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staffs = [
            [
                'staffID' => '40001',
                'sFName' => 'Abu',
                'sLName' => 'Bakar',
                'staffDept' => 'Psychiatry',
                'staffEmail' => 'abubakar@gmail.com',
                'staffPhoneNo' => '019-3421654',
            ],
            [
                'staffID' => '40002',
                'sFName' => 'Siti',
                'sLName' => 'Fatimah',
                'staffDept' => 'Dentistry',
                'staffEmail' => 'sitifatimah@gmail.com',
                'staffPhoneNo' => '011-65431888',
            ],
            [
                'staffID' => '40003',
                'sFName' => 'Aina',
                'sLName' => 'Alliyah',
                'staffDept' => 'Surgery',
                'staffEmail' => 'aina@gmail.com',
                'staffPhoneNo' => '011-1111678',
            ],
        ];

        foreach ($staffs as $staff) {
            DB::table('staff')->insert($staff);
        }
    }
}
