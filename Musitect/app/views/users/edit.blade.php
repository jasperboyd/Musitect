@extends('layouts.master')

@section('content')

{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
 
  <p>{{ Form::label('username', 'Username') }}
  {{ Form::text('username') }}</p>
 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>

  <p>{{ Form::label('first_name', 'First Name:') }}
  {{ Form::text('first_name') }}</p
 
  <p>{{ Form::label('last_name', 'Last Name:') }}
  {{ Form::text('last_name') }}</p>

  <p>{{ Form::label('primary_instrument', 'Primary Instrument:') }}
  {{ Form::text('primary_instrument') }}</p>

  {{ Form::hidden('password', Auth::user()->password())}}
 
  <p>{{ Form::submit('Update Profile') }}</p>
 
{{ Form::close() }}

@stop