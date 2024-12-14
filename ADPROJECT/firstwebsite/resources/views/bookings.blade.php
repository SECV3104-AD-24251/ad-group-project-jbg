<!-- resources/views/bookings.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Your Bookings</h2>

        @foreach($userBookings as $booking)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $booking->venue->name }}</h5>
                    <p class="card-text">Event: {{ $booking->event_name }}</p>
                    <p class="card-text">Booking Date: {{ $booking->booking_date }}</p>
                    <p class="card-text">Status: {{ ucfirst($booking->status) }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
