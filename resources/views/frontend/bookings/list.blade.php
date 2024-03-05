<table>
    <thead>
        <tr>
            <th>Booking Date</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Program</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($grownbooking as $booking)
        <tr>
            <td>{{ $booking->booking_date }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->phonenumber }}</td>
            <td>{{ $booking->graduation_grownsID }}</td>
            <!-- Add more fields as needed -->
        </tr>
        @endforeach
    </tbody>
</table>
