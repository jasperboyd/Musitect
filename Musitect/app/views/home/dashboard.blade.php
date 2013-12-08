@extends('layouts.master')

@section('content')

  <section class="content">
	<!--Songs Go Here-->
	<h1>{{{$user->username}}}'s Songs</h1>
	@foreach($songs as $song)
		<h2>{{{$song->title}}}</h2>
		<h3>Created at {{{$song->created_at}}}</h3> 
	@endforeach
  </section>

@stop
