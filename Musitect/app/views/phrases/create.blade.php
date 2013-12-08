  @if($errors->any())
    <ul>
      {{ implode('', $errors->all('<li>:message</li>'))}}
    </ul>
  @endif

  {{ Form::open(['url' => 'song/' . $song->id . '/phrases']) }} 

  	<p>{{ Form::label('phrase', 'Phrase') }}
       {{ Form::text('phrase') }}</p>

       {{ Form::hidden('song_id', $song->id)}}

    <p>{{ Form::submit('Add a phrase') }}</p>

  {{ Form::close() }}