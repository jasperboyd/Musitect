{{ Form::model($phrase, array('route' => array('phrases.update', $phrase->song_id, $phrase->id), 'method' => 'PATCH')) }}

	    @include('phrases.partials.form')

       {{ Form::hidden('song_id', $phrase->song_id)}}

       {{ Form::submit('Rewrite')}}

{{ Form::close() }}