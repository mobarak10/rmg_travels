<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_number',
        'licence_expire_date',
        'description'
        ];
    protected $dates = ['licence_expire_date'];
}
