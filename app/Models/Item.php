<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $primaryKey = 'itemID';

    protected $table = 'item';

    protected $fillable = [
        'suppID',
        'itemName',
        'itemDesc',
        'itemStock',
    ];

    // Additional model methods or relationships can be defined here
}
