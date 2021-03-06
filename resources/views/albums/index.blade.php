@extends('template')

@section('content')
    <h1>ABC Music Albums</h1>
    <a href="{{route('albums.avg_albums')}}" class="btn btn-success">Artists with More than Average Album Count</a>
    <h3>{{ $count }} Albums from 2005</h3>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Album ID</th>
            <th>Title</th>
            <th>Copyright Date</th>
            <th>Format</th>
            <th>Producer ID</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($albums as $album)
            <tr>
                <td>{{ $album->id }}</td>
                <td>{{ $album->title }}</td>
                <td>{{ $album->copyright_date }}</td>
                <td>{{ $album->format }}</td>
                <td>{{ $album->producer_id }}</td>
                <td><a href="{{route('albums.show',$album->id)}}" class="btn btn-success">Show Songs</a></td>
                {{--<td>--}}
                {{--{!! Form::open(['method' => 'DELETE', 'route'=>['songs.destroy', $song->song_id]]) !!}--}}
                {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                {{--{!! Form::close() !!}--}}
                {{--</td>--}}
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection