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
            <!--================ Accomodation Area  =================-->
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img"
                            style="background-color: rgb(5, 5, 52); height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <div style="font-size: 30px; color: white; margin-bottom: 10px;color:white;">Total Booking</div>
                            <div style="font-size: 30px; color: white;color:white;">{{ $total_booking }}</div>
                            {{-- <a href="#" class="btn theme_btn button_hover">Book Now</a> --}}
                        </div>
                        <a href="#">
                            {{-- <h4 class="sec_h4">Economy Double</h4> --}}
                        </a>
                        {{-- <h5>$200<small>/night</small></h5> --}}
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img"
                            style="background-color: rgb(5, 5, 52); height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <div style="font-size: 30px; color: white; margin-bottom: 10px;color:green;">On Progress</div>
                            <div style="font-size: 30px; color: white;color:green;">{{ $onprogressbooking }}</div>
                            <button href="#" class="btn theme_btn button_hover" data-toggle="modal"
                                data-target="#OnprogresModal">View List</button>

                            {{-- <a href="#" class="btn theme_btn button_hover">Book Now</a> --}}
                        </div>
                        <a href="#">
                            {{-- <h4 class="sec_h4">Single Deluxe Room</h4> --}}
                        </a>
                        {{-- <h5>$200<small>/night</small></h5> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img"
                            style="background-color: rgb(5, 5, 52); height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <div style="font-size: 30px; color: white; margin-bottom: 10px;color:red;">Total Overdue </div>
                            <div style="font-size: 30px; color: white;color:red;">{{ $passoff }}</div>
                            <button href="#" class="btn theme_btn button_hover" data-toggle="modal"
                                data-target="#madeniModal">View List</button>
                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#madeniModal">Pay Now</button> --}}
                        </div>
                        <a href="#">
                            {{-- <h4 class="sec_h4">Honeymoon Suit</h4> --}}
                        </a>
                        {{-- <h5>$750<small>/night</small></h5> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img"
                            style="background-color: rgb(5, 5, 52); height: 200px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <div style="font-size: 30px; color: white; margin-bottom: 10px;">Paid Booking</div>
                            <div style="font-size: 30px; color: white;">{{ $paidbooking }}</div>
                            <button href="#" class="btn theme_btn button_hover" data-toggle="modal"
                                data-target="#paidbookingModal">View List</button>
                            {{-- <a href="#" class="btn theme_btn button_hover">Book Now</a> --}}
                        </div>
                        <a href="#">
                            {{-- <h4 class="sec_h4">Economy Double</h4> --}}
                        </a>
                        {{-- <h5>$200<small>/night</small></h5> --}}
                    </div>
                </div>
            </div><br>

            <!--================ Accomodation Area  =================-->

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
                            <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->booking_date }}
                            </td>
                            <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->name }}</td>
                            <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->phonenumber }}</td>
                            <td style="padding: 8px; border: 1px solid #ddd; color: white;">
                                {{ $booking->graduation_growns->Grown_color }}</td>
                            <!-- Add more fields as needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!--================ Facilities Area  =================-->



    <!-- Madeni Modal -->
    <div class="modal fade" id="madeniModal" tabindex="-1" role="dialog" aria-labelledby="madeniModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="madeniModalLabel">View Overdue List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table style="width:100%; border-collapse: collapse;">
                        <tr style="background-color: #f2f2f2;">
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Booking ID</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Name</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Phone Number</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Booking Date</th>
                            <!-- Add more columns as needed -->
                        </tr>
                        @foreach ($passofflist as $booking)
                            <tr>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->id }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->name }}</td>
                                @php
                                    $currentDate = \Carbon\Carbon::now();
                                    $returnDate = $booking->graduation_growns->Grown_returndate;
                                    $chargePerDay = 5000;
                                    $charges = 0;
                                    if ($currentDate->gt($returnDate)) {
                                        $daysOverdue = $currentDate->diffInDays($returnDate);
                                        $charges = $daysOverdue * $chargePerDay;
                                    }
                                @endphp
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;color:red">Tsh.{{ $charges }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->booking_date }}</td>
                                <!-- Add more data as needed -->
                            </tr>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>

    {{-- On Progress Modal --}}
    <div class="modal fade" id="OnprogresModal" tabindex="-1" role="dialog" aria-labelledby="OnprogresModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="OnprogresModalLabel">View OnProgress List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table style="width:100%; border-collapse: collapse;">
                        <tr style="background-color: #f2f2f2;">
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Booking ID</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Name</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Phone Number</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Booking Date</th>
                            <!-- Add more columns as needed -->
                        </tr>
                        @foreach ($onprogressbookinglist as $booking)
                            <tr>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->id }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->name }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->phonenumber }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->booking_date }}
                                </td>
                                <!-- Add more data as needed -->
                            </tr>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
    {{-- -------------------------------- --}}

    {{-- Paid Booking --}}
    <div class="modal fade" id="paidbookingModal" tabindex="-1" role="dialog" aria-labelledby="paidbookingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paidbookingModalLabel">View OnProgress List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table style="width:100%; border-collapse: collapse;">
                        <tr style="background-color: #f2f2f2;">
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Booking ID</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Name</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Amount</th>
                            <th style="padding: 15px; border-bottom: 1px solid #ddd;">Booking Date</th>
                            <!-- Add more columns as needed -->
                        </tr>
                        @foreach ($paidbookinglist as $booking)
                            <tr>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">{{ $booking->id }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">
                                    {{ $booking->grownBooking->dammy_sims_results->student_number }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;color:green">Tsh.{{ $booking->amount }}</td>
                                <td style="padding: 15px; border-bottom: 1px solid #ddd;">
                                    {{ $booking->grownBooking->booking_date }}
                                </td>
                                <!-- Add more data as needed -->
                            </tr>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
