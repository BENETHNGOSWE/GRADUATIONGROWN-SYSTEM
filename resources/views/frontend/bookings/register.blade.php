@extends('frontend/layouts.main')
@section('content')
    {{-- <title>Exam Number Check</title> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /* Popup banner styles */
        .popup-banner {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 9999;
        }
    </style>

    <!--================Banner Area =================-->
    <!--================Banner Area =================-->
    <section class="banner_area blog_banner d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h4>Enter You're Reg Number<br /></h4>
                <p>To verify if you are qualified to proceed with other steps please</p>
                <!-- Form placed below paragraph tags -->
                <form id="check-student-number-form" action="{{ route('check-exam-number') }}" method="POST"
                    style="margin-top: 20px;">
                    @csrf
                    <input type="text" id="student_number" name="student_number" placeholder="Student Number"
                        style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 300px;">
                    <button type="submit"
                        style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Check
                        Student Number</button>
                </form>


                <div id="booking-form"
                    style="display: none; background-color: #002855; padding: 20px; border-radius: 10px;">
                    <!-- Booking form -->
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf

                        <div style="margin-bottom: 10px;">
                            <label for="booking_date" style="color: #fff; display: inline-block; width: 120px;">Booking
                                Date</label>
                            <input type="date" name="booking_date" id="booking_date" placeholder="Booking date"
                                style="padding: 10px; width: calc(100% - 140px); border: 1px solid #ccc; border-radius: 5px; display: inline-block;">
                        </div>

                        <div style="margin-bottom: 10px;">
                            <label for="name" style="color: #fff; display: inline-block; width: 120px;">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name"
                                style="padding: 10px; width: calc(100% - 140px); border: 1px solid #ccc; border-radius: 5px; display: inline-block;">
                        </div>

                        <div style="margin-bottom: 10px;">
                            <label for="phonenumber" style="color: #fff; display: inline-block; width: 120px;">Phone
                                Number</label>
                            <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number"
                                style="padding: 10px; width: calc(100% - 140px); border: 1px solid #ccc; border-radius: 5px; display: inline-block;">
                        </div>

                        <div style="margin-bottom: 10px;">
                            <label for="graduation_grownsID" style="color: #fff; display: inline-block; width: 120px;">Gown
                                Color</label>
                            <select name="graduation_grownsID" id="graduation_grownsID" class="form-select" required
                                style="padding: 10px; width: calc(100% - 140px); border: 1px solid #ccc; border-radius: 5px; background-color: #fff; color: #002855; display: inline-block;">
                                <option value="">Select Graduation Gown</option>
                                @foreach ($graduationGrowns as $id => $Grown_color)
                                    <option value="{{ $id }}">{{ $Grown_color }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit"
                            style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </section>

    <!--================Banner Area =================-->

    {{-- <form id="check-student-number-form" action="{{ route('check-exam-number') }}" method="POST">
        @csrf
        <input type="text" id="student_number" name="student_number" placeholder="Student Number">
        <button type="submit">Check Student Number</button>
    </form> --}}
    <!--================Banner Area =================-->




    <!-- Popup banner -->
    <div id="popup-banner" class="popup-banner"></div>

    <script>
        $('#check-student-number-form').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: {
                    student_number: $('#student_number').val(),
                    _token: $('input[name=_token]').val()
                },
                success: function(response) {
                    if (response.success) {
                        $('#booking-form').show();
                    } else {
                        alert('Student number not found or your GPA is below 2.0');
                    }
                }
            });
        });

        function showPopupBanner(message) {
            $('#popup-banner').text(message).fadeIn().delay(3000).fadeOut();
        }

        $('#booking-form form').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    showPopupBanner('Booking received successfully!');
                    setTimeout(function() {
                        location.reload();
                    }, 1000); // 15000 milliseconds = 15 seconds
                },
                error: function() {
                    // Handle error
                    alert('An error occurred while processing your request.');
                }
            });
        });
    </script>
    </body>

    </html>
@endsection
