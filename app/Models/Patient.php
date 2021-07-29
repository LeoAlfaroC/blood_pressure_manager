<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $casts = [
        'birthday' => 'date:Y-m-d',
    ];

    protected $dates = [
        'birthday',
    ];

    public function readings()
    {
        return $this->hasMany(BloodPressureRecord::class);
    }

    public function latestReading()
    {
        return $this->hasMany(BloodPressureRecord::class)->latest('date');
    }
}
