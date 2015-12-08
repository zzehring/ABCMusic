@extends('template')

@section('content')
    <h1>ABC Music</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Album ID</th>
            <th>Title</th>
            <th>Copyright Date</th>
            <th>Format</th>
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
            </tr>
            @endforeach

        </tbody>

    </table>
@endsection