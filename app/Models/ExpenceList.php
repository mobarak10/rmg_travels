<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenceList extends Model
{
    use HasFactory;
    protected $fillable = ['expence_sector'];
}
