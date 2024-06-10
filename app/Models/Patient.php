<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patientID';

    protected $table = 'patient';

    protected $fillable = [
        'pFName',
        'pLName',
        'pDOB',
        'pGender',
        'pPhoneNo',
        'pAddress',
    ];
}
