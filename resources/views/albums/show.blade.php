@extends('template')

@section('content')
    <h1>{{ $album->name }}'s Songs</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Song ID</th>
            <th>Song Name</th>
            <th>Artist</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($songs as $song)
            <tr>
                <td>{{ $song->song_id }}</td>
                <td>{{ $song->title }}</td>
                <td>{{ $song->musician_id }}</td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection