@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit a role</h1>
    {!! Form::open(['action' => ['AdminRolesController@update', $role->id] , 'method' => 'POST']) !!}


    <div class="form-group">
        {{form::label('name', 'Role name')}}
        {{form::text('name', $role->role, ['class' => 'form-control'])}}
    </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    {!! Form::open(['action' => ['AdminRolesController@destroy', $role->id], 'method' => 'POST']) !!}
        {{Form::submit('DELETE', ['class' => 'btn btn-danger my-1'])}}
        {{Form::hidden('_method', 'DELETE')}}
    {!! Form::close() !!}   
</div>
@endsection