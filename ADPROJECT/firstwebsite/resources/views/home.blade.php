<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Available Venues</h2>

        @foreach($venues as $venue)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $venue->name }}</h5>
                    <p class="card-text">{{ $venue->description }}</p>
                    <p class="card-text">Capacity: {{ $venue->capacity }}</p>

                    <form action="{{ route('book.venue', $venue->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="event_name" class="form-label">Event Name</label>
                            <input type="text" class="form-control" id="event_name" name="event_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="booking_date" class="form-label">Booking Date</label>
                            <input type="date" class="form-control" id="booking_date" name="booking_date" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Book this Venue</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
