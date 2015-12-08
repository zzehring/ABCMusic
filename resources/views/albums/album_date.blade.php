@extends('template')

@section('content')
    <h1>Albums from 2005</h1>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $count->albumsInYear }}</td>
            </tr>

        </tbody>

    </table>
@endsection