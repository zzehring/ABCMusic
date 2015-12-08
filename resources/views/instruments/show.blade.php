@extends('template')

@section('content')
    <h1>Musicians that play the {{ $instrument->name }}</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Musician Name</th>
            <th>Musician ID</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($artists as $artist)
            <tr>
                <td>{{ $artist->id }}</td>
                <td>{{ $artist->name }}</td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection