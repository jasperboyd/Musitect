{{ Form::model($phrase, ['route' => ['phrases.update', $phrase->song_id, $phrase->id], 'method' => 'PUT'])}}

		@include('phrases.partials.form')

       {{ Form::hidden('song_id', $phrase->song_id)}}

       {{ Form::submit('Rewrite')}}

{{ Form::close() }}