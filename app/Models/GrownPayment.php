<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrownPayment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'paid', 'grown_booking_id'];

    public function grownBooking() {
        return $this->belongsTo(GrownBooking::class, 'grown_booking_id');
    }

    public function dammy_sims_results(){
        return $this->belongsTo(DammySimsResults::class, 'dammy_sims_resultsID');
    }
}
