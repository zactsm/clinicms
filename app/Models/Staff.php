<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $primaryKey = 'staffID';
    protected $table = 'staff';

    protected $fillable = [
        'sFName',
        'sLName',
        'staffDept',
        'staffEmail',
        'staffPhoneNo',
    ];
}
