<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'suppID',
        'itemName',
        'itemDesc',
        'itemStock',
    ];

    // Additional model methods or relationships can be defined here
}
