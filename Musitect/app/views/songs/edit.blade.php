@extends('layouts.master')

  @section('content')

  <?php $phrases = Phrase::where('song_id', '=', $song->id)->get() ?>

  <section id="preview">
    @include('songs.show', [$song])
  </section> 

  <section id="editor"> 
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

    @foreach($phrases as $phrase)
      <p>
      @include('phrases.edit', [$phrase])
      @include('phrases.destroy', [$phrase])
      </p>
    @endforeach

    @include('phrases.create', array($song))
  </section>
@stop
