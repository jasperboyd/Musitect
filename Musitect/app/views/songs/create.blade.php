@extends('layouts.master')

@section('content')

  <article class="song_creator">
  @if($errors->any())
    <ul>
      {{ implode('', $errors->all('<li>:message</li>'))}}
    </ul>
  @endif

  <h1>Before you get to writing, can you tell me...</h1>

  <p>*Only title is required.</p>

  {{ Form::open(['route' => 'song.store']) }}

  <p>{{ Form::label('title', 'What is your songs title?') }}
       {{ Form::text('title') }}</p>

  <p>{{ Form::label('key', 'What is its primary key?') }}
       {{ Form::text('key') }}</p>

  <p>{{ Form::label('tempo', 'What is the tempo in BPM?' ) }}
       {{ Form::text('tempo') }}</p>

  <p>{{ Form::submit('Name your tune!') }}</p>

  {{ Form::close() }}
</article> 

@stop
