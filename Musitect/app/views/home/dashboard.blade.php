@extends('layouts.master')

@section('content')

  <section class="content">
	<!--Songs Go Here-->
	<h1>{{{$user->username}}}'s Songs</h1>
	@foreach($songs as $song)
		<h2>{{{$song->title}}}</h2>
		<h3>Created at {{{$song->created_at}}}</h3>
		<h3>Updated at {{{$song->updated_at}}}</h3> 
		<p>{{ link_to_action('SongController@edit', 'edit', $song->id); }} | 
		<!-- Show Phrases --> <!-- Show Chords --> 
		{{ link_to_route('song.showdestroy', 'destroy', $song->id); }}</p>
	@endforeach
  </section>

@stop
