{{ Form::model($phrase, ['route' => ['phrases.edit', $phrase->song_id, $phrase->id]], 'method' => 'PUT')}}

{{ Form::close }}