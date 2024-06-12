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

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patientID');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staffID');
    }

    public function medication()
    {
        return $this->belongsTo(Medication::class, 'medID');
    }
}
