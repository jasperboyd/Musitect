@extends('layouts.master')

@section('content')
  @if($errors->any())
    <ul>
      {{ implode('', $errors->all('<li>:message</li>'))}}
    </ul>
  @endif

  {{ Form::open(array('route' => 'song.store')) }}

    <p>{{ Form::label('title', 'Title') }}
      {{ Form::text('title') }}</p>

    <p>{{ Form::submit('Save Title') }}</p>

  {{ Form::close() }}

  @include('phrases.create')

@stop
