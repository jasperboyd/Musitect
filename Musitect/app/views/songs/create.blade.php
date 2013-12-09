@extends('layouts.master')

@section('content')
  @if($errors->any())
    <ul>
      {{ implode('', $errors->all('<li>:message</li>'))}}
    </ul>
  @endif

  {{ Form::open(['route' => 'song.store']) }}

  <p>{{ Form::label('title', 'Title:') }}
       {{ Form::text('title') }}</p>

  <p>{{ Form::label('key', 'Key:') }}
       {{ Form::text('key') }}</p>

  <p>{{ Form::label('tempo', 'Tempo:') }}
       {{ Form::text('tempo') }}</p>

  <p>{{ Form::submit('Name your tune!') }}</p>

  {{ Form::close() }}

@stop
