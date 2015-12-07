@extends('template')
@section('content')
    <h1>Update Musician Address</h1>
    {!! Form::model($musician,['method' => 'PATCH','route'=>['musicians.update',$musician->id]]) !!}
    <div class="form-group">
        {!! Form::label('Address', 'Address:') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop