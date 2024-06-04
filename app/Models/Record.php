<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $table = 'medical_record';

    protected $fillable = [
        'patientID',
        'staffID',
        'medID',
        'recDiagnosis',
        'recDate',
    ];
}
