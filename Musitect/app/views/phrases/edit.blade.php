@include('chords.create')

{{ Form::model($phrase, ['route' => ['phrases.edit', $phrase->song_id, $phrase->id]], ['method' => 'PUT'])}}

	<p>{{ Form::label('phrase', 'Phrase:') }}
       {{ Form::text('phrase') }}</p>

       {{ Form::hidden('song_id', $song->id)}}

       {{ Form::submit('Rewrite')}}

{{ Form::close() }}