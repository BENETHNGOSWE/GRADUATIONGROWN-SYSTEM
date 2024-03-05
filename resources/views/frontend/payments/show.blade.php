<!-- resources/views/payments/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Payment Status</h1>

        <div class="alert alert-info" role="alert">
            @if ($payment->paid)
                Payment has been <strong>paid</strong> for this booking.
            @else
                Payment is <strong>pending</strong> for this booking.
            @endif
        </div>
    </div>
@endsection
