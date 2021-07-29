<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodPressureRecord extends Model
{
    use HasFactory;

    protected $dates = [
        'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}
