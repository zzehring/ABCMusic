@extends('template')

@section('content')
    <h1>ABC Music Musicians</h1>
    <a href="{{url('/musicians/create')}}" class="btn btn-success">Add Musician</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Name</th>
            <th>SSN</th>
            <th>Address</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($musicians as $musician)
            <tr>
                <td>{{ $musician->id }}</td>
                <td>{{ $musician->name }}</td>
                <td>{{ $musician->ssn }}</td>
                <td>{{ $musician->address }}</td>
                <td><a href="{{route('musicians.edit',$musician->id)}}" class="btn btn-warning">Update Address</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['musicians.destroy', $musician->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
                <td><a href="{{route('musicians.show',$musician->id)}}" class="btn btn-warning">Show Musician Albums</a></td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection