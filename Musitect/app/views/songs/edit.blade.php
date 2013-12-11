@extends('layouts.master')

  @section('content')

  <article class="song_editor">
  <?php //$phrases = $song->phrases; ?>
  <?php $phrases = Phrase::where('song_id', '=', $song->id)->get() ?>

  <section class="preview">
    <h1>Preview of {{$song->title}}</h1> 

    @foreach($phrases as $phrase)
    
    @include('phrases.show')
    
    @endforeach
  
    <hr>
  </section> 



  <section class="editor"> 

  <h1>Editor</h1> 

   @if($errors->any())
     <ul>
       {{ implode('', $errors->all('<li>:message</li>'))}}
     </ul>
  @endif

  <section class="song_update">
  {{ Form::model($song, array('route' => array('song.update', $song->id), 'method' => 'PUT')) }}

   <p>{{ Form::label('title', 'Title:') }}
       {{ Form::text('title') }}</p>

   <p>{{ Form::label('key', 'Key:') }}
       {{ Form::text('key') }}</p>

  <p>{{ Form::label('tempo', 'Tempo:') }}
       {{ Form::text('tempo') }}</p>
 
   <p>{{ Form::submit('Save changes!') }}</p>

   {{ Form::close() }}
 </section>

 <section class="phrase_create">
    <h2>Add a Phrase</h2> 

    @include('phrases.create')

  </section>

  <section class="phrases_edit">
    <h2>Edit existing Phrases</h2> 

    @foreach($phrases as $phrase)
    
    @include('phrases.edit')
    
    @endforeach
  </section> 

  <section class="collective_add">
    @if($song->collective_id == NULL)
      <h2>Add to Collective</h2>
    @else
      <h2>Move song from {{Collective::find($song->collective_id)->name }}</h2>
    @endif

    <p>Don't have any collectives?
    {{link_to_route('collectives.create', 'create')}} one!</p>

    @include('songs.addCollective')

  </section>
  </article>
@stop
