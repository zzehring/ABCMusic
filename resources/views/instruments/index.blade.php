@extends('template')

@section('content')
    <h1>ABC Music Instruments</h1>
    <a href="{{route('instruments.multiple')}}" class="btn btn-warning">Musicians that play multiple instruments</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Instrument ID</th>
            <th>Instrument Name</th>
            <th>Key</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($instruments as $instrument)
            <tr>
                <td>{{ $instrument->id }}</td>
                <td>{{ $instrument->name }}</td>
                <td>{{ $instrument->musical_key }}</td>
                <td><a href="{{route('instruments.show',$instrument->id)}}" class="btn btn-warning">Show Musicians</a></td>
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