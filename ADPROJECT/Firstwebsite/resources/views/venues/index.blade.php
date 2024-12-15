@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue - Index</title>
</head>
<body>
    <div class="container">
    <h1>Venue - List</h1>
    <button type="button" class="btn btn-outline-primary"><a href="{{ route('venues.create') }}">Add New Venue</a></button>
    <table class="table" border="1">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Capacity</th>
            <th>Assigned Lecturer</th>
            <th>Subject</th>
            <th>Action</th>
        </tr>
        @if ($venues->count() > 0)
        <?php $no = 1; ?>
            @foreach ($venues as $venue)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $venue->name }}</td>
                    <td>{{ $venue->capacity }}</td>
                    <td>{{ $venue->lecturer ? $venue->lecturer->name : 'Not Assigned' }}</td>
                    <td>{{ $venue->subject ? $venue->subject->name : 'Not Assigned' }}</td>
                    <td>
                    <form action="{{ route('venues.destroy', $venue->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary" href="{{ route('venues.show', $venue->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('venues.edit', $venue->id) }}">Edit</a>
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">No data found</td>
            </tr>
        @endif

    </table>
    </div>
</body>
</html>
@endsection
