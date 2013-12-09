{{ Form::model($phrase, ['route' => ['phrases.update', $phrase->song_id, $phrase->id], 'method' => 'PUT'])}}

	<p>{{ Form::label('chord', 'Chord:') }}
       {{ Form::text('chord') }}</p>

	<p>{{ Form::label('phrase', 'Phrase:') }}
       {{ Form::text('phrase') }}</p>

       {{ Form::hidden('song_id', $phrase->song_id)}}

       {{ Form::submit('Rewrite')}}

{{ Form::close() }}