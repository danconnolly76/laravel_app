<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'patient_name', 'doctor', 'date', 'time', 'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
