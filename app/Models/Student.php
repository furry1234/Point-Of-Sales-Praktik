<?php

namespace App\Models;

use App\Models\Rombel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'name',
        'rombel',
        'rayon'
    ];
    public function rombel()
    {
        return $this->belongsTo(Rombel::class, 'rombel');
    }
}
