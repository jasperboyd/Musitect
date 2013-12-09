{{Form::open(array('method' => 'DELETE', 'route' => ['phrases.destroy', $phrase->song_id, $phrase->id] ))}}

	 {{Form::submit('Burn')}}

{{Form::close()}}
