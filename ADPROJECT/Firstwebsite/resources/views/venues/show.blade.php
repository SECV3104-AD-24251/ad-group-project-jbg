@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue - Show</title>
</head>
<body>
    <style>
        .table-container {
            width: 100%;
        }
        .table {
            width: 100%;
            table-layout: fixed; /* Ensures consistent column widths */
        }
        .table th, .table td {
            text-align: left;
            padding: 8px;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .table th, .table td {
            width: 25%; /* Adjust this if you have more or fewer columns */
        }
    </style>
<div class="container">
        <h1>Venue Details</h1>

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $venue->name }}</h5>
                <p><strong>Capacity:</strong> {{ $venue->capacity }}</p>
            </div>
        </div>

        <h2>Subjects in this Venue</h2>
        @if (is_null($venue->subjects) || $venue->subjects->isEmpty())
            <p>No subjects assigned to this venue yet.</p>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Subject Name</th>
                    <th>Subject Code</th>
                    <th>Credit Hours</th>
                    <th>Lecturer</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($venue->subjects as $subject)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->code }}</td>
                        <td>{{ $subject->creditHours }}</td>
                        <td>{{ $subject->lecturer->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <h2>Venue Suggestions from Students</h2>
        @if ($venue->suggestions->isEmpty())
            <p>No venue suggestions for this venue yet.</p>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($venue->suggestions as $suggestion)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $suggestion->student->name }}</td>
                        <td>{{ $suggestion->subject->name }}</td>
                        <td>{{ ucfirst($suggestion->status) }}</td>
                        <td>
                            @if ($suggestion->status === 'pending')
                                <form action="{{ route('venues.updateStatus', $suggestion) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="accepted">
                                    <button type="submit" class="btn btn-success btn-sm">Accept</button>
                                </form>
                                <form action="{{ route('venues.updateStatus', $suggestion) }}" method="POST" class="mt-1">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="rejected">
                                    <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                </form>
                            @else
                                <em>{{ ucfirst($suggestion->status) }}</em>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('venues.index') }}" class="btn btn-secondary mt-3">Back to Venues</a>
    </div>
</body>
</html>
@endsection
