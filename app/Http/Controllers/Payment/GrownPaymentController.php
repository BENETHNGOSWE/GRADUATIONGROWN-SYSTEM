<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GrownPayment;
use App\Models\GrownBooking;
use App\Models\GraduationgownContract;
use App\Models\GraduationGrown;


class GrownPaymentController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['contract'] = GraduationgownContract::first();
    }


    public function payNow($bookingId)
    {
        // Find the booking
        $booking = GrownBooking::findOrFail($bookingId);

        // Check if payment already exists
        if ($booking->payment) {
            // Payment already exists, show payment status
            return view('frontend.payments.show', ['payment' => $booking->payment]);
        } else {
            // Payment doesn't exist, show payment form
            return view('frontend.payments.create', ['booking' => $booking, 'contract' => $this->data['contract']]);
        }
    }

    public function storePayment(Request $request, $bookingId)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        // Find the booking
        $booking = GrownBooking::findOrFail($bookingId);
        
        // Fetch graduation grown data for the booking
        $graduationGrown = GraduationGrown::findOrFail($booking->graduation_grownsID);

        // Check if the amount paid is equal to the grown price
        if ($validatedData['amount'] == $graduationGrown->Grown_price) {
            // Amount paid matches the grown price, set payment status to paid
            $paymentStatus = true;
        } else {
            // Amount paid doesn't match the grown price, set payment status to not paid
            $paymentStatus = false;
        }

        // Create new payment
        $payment = new GrownPayment([
            'amount' => $validatedData['amount'],
            'paid' => $paymentStatus,
        ]);
        $payment->grown_booking_id = $bookingId;
        $payment->save();

        return redirect()->route('grown.bookings')->with('success', 'Payment recorded successfully!');
    }
}
