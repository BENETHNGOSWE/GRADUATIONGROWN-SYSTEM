<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrownPayment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'paid'];

    public function grownBooking() {
        return $this->belongsTo(GrownBooking::class);
    }
}
