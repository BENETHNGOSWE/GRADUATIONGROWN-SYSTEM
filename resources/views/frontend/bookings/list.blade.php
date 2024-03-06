@extends('frontend.layouts.main')
@section('content')
   <!--================ Facilities Area  =================-->
 <section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">Booking List</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <table style="border-collapse: collapse; width: 100%; border: 1px solid #ddd;">
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th style="padding: 8px; border: 1px solid #fffefe;">Booking Date</th>
                    <th style="padding: 8px; border: 1px solid #ddd;">Name</th>
                    <th style="padding: 8px; border: 1px solid #ddd;">Phone Number</th>
                    <th style="padding: 8px; border: 1px solid #ddd;">Gown Color</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($grownbooking as $booking)
                    <tr style="border: 1px solid #ddd;">
                        <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->booking_date }}</td>
                        <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->name }}</td>
                        <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->phonenumber }}</td>
                        <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->graduation_growns->Grown_color }}</td>
                        <!-- Add more fields as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<!--================ Facilities Area  =================-->
@endsection
