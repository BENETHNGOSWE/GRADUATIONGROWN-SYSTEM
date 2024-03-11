<?php

namespace App\Http\Controllers\GrownBooking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GraduationGrown;
use App\Models\GrownBooking;
use App\Models\GrownPayment;  
use App\Models\DammySimsResults;
use App\Models\GraduationgownContract;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GrownBookingController extends Controller
{ 
    protected $data = [];
    public function __construct(){
       $this->data['graduationGrowns '] = GraduationGrown::all();
       $this->data['dammySimsResults '] = DammySimsResults::all();
       $this->data['grownbooking'] = GrownBooking::all();
       $this->data['contract'] = GraduationgownContract::first();
    //    $this->data['contract'] = GraduationgownContract::all();
    }

    public function indexhomepage(){
        $this->data['contract'] = GraduationgownContract::first();
        // if ($contract) {
        //     return view('homepage.index', compact('contract'));
        // } else {
        //     return view('homepage.index')->withErrors('No contract found.');
        // }

        return view('frontend.homepage', $this->data);
    }

    public function index(){
        $this->data['booking'] = GraduationGrown::pluck('Grown_color', 'id');
        $this->data['contract'] = GraduationgownContract::first();
        return view('frontend.bookings.list', $this->data);
    }

    public function create(){
        $this->data['graduationGrowns'] = GraduationGrown::pluck('Grown_color','id');
        $this->data['contract'] = GraduationgownContract::first();
        return view('frontend.bookings.register', $this->data);
    }

    public function validate_booking(Request $request){
        return $request->validate([
            'booking_date' => 'required',
            'name' => 'required',
            'phonenumber' => 'required',
            'graduation_grownsID' => 'required|exists:graduation_growns,id',
            // 'dammy_sims_resultsID' => 'required|exists:dammy_sims_results,id',
        ]);
    }

    public function checkExamNumber(Request $request)
    {
        $student = DammySimsResults::where('student_number', $request->student_number)->first();
        if($student){

            if ($student->gpa < 2.0) {
                         return back()->with('error', 'Cannot proceed with booking. The student\'s GPA is below 2.0');
                    }

            $request->session()->put('examNumber', $request->student_number);
            return response()->json(['success' => true]);
        }else{
            return response()->json(['success' => false]);
        }
    }


    public function store(Request $request)

    {
        // Check if the exam number exists in the session
        if (!session()->has('examNumber')) {
            return redirect()->route('booking.create')->with('error', 'Please enter a valid exam number first.');
        }
    
        // Validate booking data
        $validatedData = $request->validate([
            'booking_date' => 'required',
            'name' => 'required',
            'phonenumber' => 'required',
            'graduation_grownsID' => 'required|exists:graduation_growns,id',
        ]);
    
        // Find the DammySimsResult record for the student number
        $student = DammySimsResults::where('student_number', session('examNumber'))->first();
    
        // Add the DammySimsResult id to the validated data
        $validatedData['dammy_sims_resultsID'] = $student->id;
    
        // Store the booking data in the database
        $booking = new GrownBooking();
        $booking->fill($validatedData);
        $booking->save();
    
        // Clear the exam number from session after successful booking
        session()->forget('examNumber');
    
        return response()->json(['success' => 'Booking successful!']);
    }


    public function showBooking(Request $request)
    {
        // Retrieve the student record for the student number
        $studentNumber = $request->input('student_number');
        $bookings = GrownBooking::whereHas('dammy_sims_results', function ($query) use ($studentNumber) {
            $query->where('student_number', $studentNumber);
        })->get();
    
        // Check payment status for each booking
        foreach ($bookings as $booking) {
            // Find the payment for the booking
            $payment = GrownPayment::where('grown_booking_id', $booking->id)->first();
    
            if ($payment) {
                // If payment exists, check if it's marked as paid
                if ($payment->paid) {
                    $booking->paymentStatus = 'Paid';
                } else {
                    $booking->paymentStatus = 'Not Paid';
                }
            } else {
                // If no payment exists, mark as not paid
                $booking->paymentStatus = 'Not Paid';
            }

            $currentDate = Carbon::now();
            $returnDate = $booking->graduation_growns->Grown_returndate;
            // $daysOverdue = $currentDate->diffInDays($returnDate, false);
            if ($currentDate->gt($returnDate)) {
                $daysOverdue = $currentDate->diffInDays($returnDate);
                $chargePerDay = 5000;
                $booking->charges = $daysOverdue * $chargePerDay;
                $booking->overdueStatus = 'Overdue';
            } else {
                $booking->charges = 0;
                $booking->overdueStatus = 'Not Overdue';
            }
        }
        return view('frontend.bookings.show', ['bookings' => $bookings, 'studentNumber' => $studentNumber, 'contract'=>$this->data['contract']]);
    }
    

    
    















































































    //     public function store(Request $request)
    // {
    //     // Check if the exam number exists in the session
    //     if (!session()->has('examNumber')) {
    //         return redirect()->route('booking.create')->with('error', 'Please enter a valid exam number first.');
    //     }

    //     // Validate booking data
    //     $validatedData = $request->validate([
    //         'booking_date' => 'required',
    //         'name' => 'required',
    //         'phonenumber' => 'required',
    //         'graduation_grownsID' => 'required|exists:graduation_growns,id',
    //     ]);

    //     // Store the booking data in the database
    //     $booking = new GrownBooking();
    //     $booking->fill($validatedData);
    //     dd($booking);
    //     $booking->save();

    //     // Clear the exam number from session after successful booking
    //     session()->forget('examNumber');

    //     return redirect()->route('homepage')->with('success', 'Booking successful!');
    // }


}
