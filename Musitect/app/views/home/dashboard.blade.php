@extends('layouts.master')

@section('content')

  <section class="content">
	<!--Songs Go Here-->
	<h1>{{{$user->username}}}'s Songs</h1>
	@foreach($songs as $song)
		<h2>{{{$song->title}}}</h2>
		<h3>Created at {{{$song->created_at}}}</h3>
		<h3>Updated at {{{$song->updated_at}}}</h3> 
		<a href="{{ action('SongController@edit', $song->id) }}">edit</a>
	@endforeach
  </section>

@stop
