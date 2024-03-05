
    <div class="container">
        <h1>Make Payment</h1>

        <form action="{{ route('grown-bookings.store-payment', $booking->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="amount" class="form-label">Payment Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
            </div>
            <button type="submit" class="btn btn-primary">Pay Now</button>
        </form>
    </div>
