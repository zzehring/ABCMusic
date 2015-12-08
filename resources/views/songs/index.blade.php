@extends('template')

@section('content')
    <h1>ABC Music Songs</h1>
    <a href="{{route('songs.song_count')}}" class="btn btn-warning">Musicians' Song Count</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Song Id</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Album ID</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($songs as $song)
            <tr>
                <td>{{ $song->song_id }}</td>
                <td>{{ $song->title }}</td>
                <td>{{ $song->musician_id }}</td>
                <td>{{ $song->album_id }}</td>
                {{--<td><a href="{{route('musician.edit',$musician->id)}}" class="btn btn-warning">Update</a></td>--}}
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['songs.destroy', $song->song_id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection