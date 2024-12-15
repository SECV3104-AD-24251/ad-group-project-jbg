@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue - Create</title>
</head>
<body>
    <div class="container">
        <h1>Venue - Create</h1>
        <form method="POST" action="{{ route('venues.store') }}">
            @csrf
            <div class="form-group">
                <label>Venue Name</label>
                <input type="text" class="form-control" placeholder="Enter venue name" name="name" required>
            </div>
            <div class="form-group">
                <label>Capacity</label>
                <input type="number" class="form-control" placeholder="Enter capacity" name="capacity" required>
            </div>
            <div class="form-group">
                <label>Select Lecturer</label>
                <select class="form-control" name="lecturer_id" required>
                    <option value="" disabled selected>Select a lecturer</option>
                    @foreach($lecturers as $lecturer)
                        <option value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Select Subject</label>
                <select class="form-control" name="subject_id" required>
                    <option value="" disabled selected>Select a subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
@endsection
