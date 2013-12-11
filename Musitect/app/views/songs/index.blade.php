@extends('layouts.master')

@section('content')

	<?php $user = Auth::user(); ?>

	@if($user->first_name != NULL)
	<h1>{{{$user->first_name}}}'s Song Library</h1>
	@else 
	<h1>{{{$user->username}}}'s Song Library</h1>
	@endif

	@foreach($songs as $song)

		<h2>{{{$song->title}}}</h2>
		<h3>Created at {{{$song->created_at}}}</h3>
		<h3>Updated at {{{$song->updated_at}}}</h3> 
		@if($song->key != NULL)
		<h3>Key: {{{$song->key}}}</h3> 
		@endif

		@if($song->tempo != NULL)
		<h3>Tempo: {{{$song->tempo}}}</h3> 
		@endif
		<p>
		{{ link_to_route('song.show', 'preview', $song->id) }} |
		{{ link_to_route('song.edit', 'edit', $song->id) }} | 
		{{ link_to_route('song.showdestroy', 'burn', $song->id) }}</p>

	@endforeach

@stop