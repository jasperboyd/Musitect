@extends('layouts.master')

  @section('content')
   @if($errors->any())
     <ul>
       {{ implode('', $errors->all('<li>:message</li>'))}}
     </ul>
  @endif
  
  <h1> {{{ $song->title }}} </h1> 

  {{ Form::model($song, array('route' => array('song.update', $song->id), 'method' => 'PUT')) }}

   <p>{{ Form::label('title', 'Title:') }}
       {{ Form::text('title') }}</p>

   <p>{{ Form::label('key', 'Key:') }}
       {{ Form::text('key') }}</p>

  <p>{{ Form::label('tempo', 'Tempo:') }}
       {{ Form::text('tempo') }}</p>
 
   <p>{{ Form::submit('Name Your Tune') }}</p>

   {{ Form::close() }}

   <?php $phrases = Phrase::where('song_id', '=', $song->id)->get() ?>

    @foreach($phrases as $phrase)
      <p>
      @include('phrases.edit', [$phrase])
      @include('phrases.destroy', [$phrase])
      </p>
    @endforeach

    @include('phrases.create', array($song))
@stop
