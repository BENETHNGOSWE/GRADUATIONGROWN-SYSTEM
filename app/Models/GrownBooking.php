<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrownBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_date',
        'name',
        'phonenumber',
        'graduation_grownsID',
        'dammy_sims_resultsID',
    ];



    public function graduation_growns(){
        return $this->belongsTo(GraduationGrown::class, 'graduation_grownsID');
    }

    public function dammy_sims_results(){
        return $this->belongsTo(DammySimsResults::class, 'dammy_sims_resultsID');
    }
}
