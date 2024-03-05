<!DOCTYPE html>
<html>
<head>
    <title>Exam Number Check</title>
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
</head>
<body>
    <form id="check-student-number-form" action="{{ route('check-exam-number') }}" method="POST">
        @csrf
        <input type="text" id="student_number" name="student_number" placeholder="Student Number">
        <button type="submit">Check Student Number</button>
    </form>

    <div id="booking-form" style="display: none;">
        <!-- Booking form -->
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <input type="date" name="booking_date" placeholder="Booking date">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="phonenumber" placeholder="Phone Number">
            <div class="mb-3">
                <label for="graduation_grownsID" class="form-label">Program</label>
                <select name="graduation_grownsID" id="graduation_grownsID" class="form-select" required>
                    <option value="">Select Program</option>
                    @foreach ($graduationGrowns as $id => $Grown_color)
                    <option value="{{ $id }}">{{ $Grown_color }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

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
            }, 15000); // 15000 milliseconds = 15 seconds
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
