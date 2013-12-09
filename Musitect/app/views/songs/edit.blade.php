@extends('layouts.master')

  @section('content')
   @if($errors->any())
     <ul>
       {{ implode('', $errors->all('<li>:message</li>'))}}
     </ul>
  @endif
  
  <h1> {{{ $song->title }}} </h1> 

  {{ Form::model($song, array('route' => array('song.update', $song->id), 'method' => 'PUT')) }}

   <p>{{ Form::label('title', 'Title') }}
       {{ Form::text('title') }}</p>
 
   <p>{{ Form::submit('Name Your Tune') }}</p>

   {{ Form::close() }}

   <?php $phrases = Phrase::where('song_id', '=', $song->id)->get() ?>

    @foreach($phrases as $phrase)
      <p>
      @include('phrases.edit', array($phrase))
      @include('phrases.destroy', array($phrase))
      </p>
    @endforeach

    @include('phrases.create', array($song))
@stop
