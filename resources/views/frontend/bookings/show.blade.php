@extends('frontend.layouts.main')
@section('content')

<section class="banner_area blog_banner d_flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="banner_content text-center">
            <h4>Check Your Booking Records<br /></h4>
            <p>Please enter your number to see your booking records</p>
            <!-- Form placed below paragraph tags -->
            <form form action="{{ route('booking.records') }}" method="GET"
                style="margin-top: 20px;">
                @csrf
                <input type="text" id="student_number" name="student_number" placeholder="Student Number"
                    style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;  width: 300px;">
                <button type="submit"
                    style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Check
                    Student Number</button>
            </form>

            <ul style="list-style-type: none; text-align: left; padding: 0;">
                @if (!empty($studentNumber))
                    <li style="margin-bottom: 10px;">Student Number: {{ $studentNumber }}</li>
                @endif
                @foreach ($bookings as $booking)
                    <li style="background-color: #ffffff8c; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                        <strong style="font-weight: bold;">Booking ID:</strong> {{ $booking->id }}<br>
                        <strong style="font-weight: bold;">Booking Date:</strong> {{ $booking->booking_date }}<br>
                        <strong style="font-weight: bold;">Name:</strong> {{ $booking->name }}<br>
                        <strong style="font-weight: bold;">Phone Number:</strong> {{ $booking->phonenumber }}<br>
                        <strong style="font-weight: bold;">Graduation Grown Color:</strong> {{ $booking->graduation_growns->Grown_color}}<br>
                        @if ($booking->paymentStatus == 'Paid')
                            <span style="font-weight: bold; color:green;">Status: Paid</span>
                        @else
                            <form action="{{ route('grown-bookings.pay-now', $booking->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary">Pay Now</button>
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">Pay Now</button> --}}
                            </form>
                        @endif
                        <br>
                        @if ($booking->charges > 0)
                         <strong style=" font-weight: bold; color: red">Overdue Charges:</strong><span style=" font-weight: bold; color: red"> {{ $booking->charges }} </span>
                        @endif
                    </li>
                @endforeach
            </ul>
            
            
        </div>
    </div>
    
</section>
<!-- Payment Modal -->
{{-- <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Make Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('grown-bookings.store-payment', $booking->id) }}" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="amount" class="form-label">Payment Amount</label>
                  <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
              </div>
              <button type="submit" class="btn btn-primary">Pay Now</button>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
  
@endsection
