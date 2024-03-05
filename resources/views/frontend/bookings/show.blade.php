<div class="container">
    <h1>Student Bookings</h1>

    <!-- Form to input student number -->
    <form action="{{ route('booking.records') }}" method="GET">
        @csrf
        <div class="mb-3">
            <label for="student_number" class="form-label">Enter Student Number:</label>
            <input type="text" class="form-control" id="student_number" name="student_number" placeholder="Enter Student Number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Display student bookings -->
    <ul>
        <p>Student Number: {{ $studentNumber }}</p>
        @foreach ($bookings as $booking)
            <li>
                <strong>Booking ID:</strong> {{ $booking->id }}<br>
                <strong>Booking Date:</strong> {{ $booking->booking_date }}<br>
                <strong>Name:</strong> {{ $booking->name }}<br>
                <strong>Phone Number:</strong> {{ $booking->phonenumber }}<br>
                <strong>Graduation Grown Color:</strong> {{ $booking->graduation_growns->Grown_color}}<br>
                @if ($booking->paymentStatus == 'Paid')
                    <!-- Show "Paid" status -->
                    <strong>Status:</strong> Paid
                @else
                    <!-- Show "Pay Now" button -->
                    <form action="{{ route('grown-bookings.pay-now', $booking->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Pay Now</button>
                    </form>
                @endif
                <br>
                {{-- @if ($booking->dammy_sims_results)
                    <strong>Graduation Grown Color:</strong> {{ $booking->graduation_growns->Grown_color }}
                @else
                    <strong>Graduation Grown Color:</strong> N/A (No related dammy_sims_results record)
                @endif --}}
            </li>
        @endforeach
    </ul>
</div>
