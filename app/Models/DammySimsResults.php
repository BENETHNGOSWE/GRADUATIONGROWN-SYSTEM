<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DammySimsResults extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number',
        'Development_Studies',
        'Electronic_Commerce',
        'Database_Systems',
        'Operating_System_Administration',
        'Computerized_Accounting',
        'Data_Structure_and_Algorithms',
        'Data_Communications',
        'Mathematical_Statistics',
        'gpa',
    ];
}
