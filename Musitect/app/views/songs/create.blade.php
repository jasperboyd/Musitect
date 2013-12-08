@extends('layouts.master')

@section('content')
  @if($errors->any())
    <ul>
      {{ implode('', $errors->all('<li>:message</li>'))}}
    </ul>
  @endif

  {{ Form::open(['route' => 'song.store']) }}

  <p>{{ Form::label('title', 'Title') }}
       {{ Form::text('title') }}</p>

  <p>{{ Form::submit('Name Your Tune') }}</p>

  {{ Form::close() }}

@stop
