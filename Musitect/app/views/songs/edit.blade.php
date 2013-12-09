@extends('layouts.master')

  @section('content')

  <?php $phrases = Phrase::where('song_id', '=', $song->id)->get() ?>

  <section id="preview">
    @include('songs.show', [$song])
  </section> 

  <section id="editor"> 

    <h1>Editor</h1> 

   @if($errors->any())
     <ul>
       {{ implode('', $errors->all('<li>:message</li>'))}}
     </ul>
  @endif

  {{ Form::model($song, array('route' => array('song.update', $song->id), 'method' => 'PUT')) }}

   <p>{{ Form::label('title', 'Title:') }}
       {{ Form::text('title') }}</p>

   <p>{{ Form::label('key', 'Key:') }}
       {{ Form::text('key') }}</p>

  <p>{{ Form::label('tempo', 'Tempo:') }}
       {{ Form::text('tempo') }}</p>
 
   <p>{{ Form::submit('Save changes!') }}</p>

   {{ Form::close() }}

    <h2>Add a Phrase</h2> 

    @include('phrases.create', array($song))

    <h2>Edit existing Phrases</h2> 

    @include('songs.partials.phraseloop')
    
  </section>
@stop
