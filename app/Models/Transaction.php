<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
    'item', 
    'price',
    'total_item',
    'total_price',
    'payment',
    'change',
    'purchased_at'
];

}
