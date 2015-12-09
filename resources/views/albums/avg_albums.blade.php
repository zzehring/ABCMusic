@extends('template')

@section('content')
    <h1>Musicians with greater than average album counts</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Musician Name</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($artists as $artist)
            <tr>
                <td>{{ $artist->name }}</td>
                <td>{{ $artist->albumCount }}</td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection