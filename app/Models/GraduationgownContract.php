<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduationgownContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'contract',
    ];
}
