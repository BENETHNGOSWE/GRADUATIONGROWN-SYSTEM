<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduationGrown extends Model
{
    use HasFactory;

    protected $fillable =[
        'Grown_color',
        'Grown_Size',
        'Grown_price',
        'Grown_returndate',
        // 'Grown_image',
    ];
}
