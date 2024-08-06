<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'authority_apply',
        'health_condition',
        'taxi_medical',
        'assessment',
        'location',
        'date',
        'time',
        'price',
        'status',
        'payment_method',
    ];
}
