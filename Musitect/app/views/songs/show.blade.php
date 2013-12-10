@extends('layouts.master')

@section('content')

@include('songs.partials.title')

@foreach($phrases as $phrase)
	@include('phrases.show')
@endforeach

<p>{{ link_to_action('SongController@edit', 'edit', $song->id) }} | 
{{ link_to_route('song.showdestroy', 'destroy', $song->id) }}</p>

@stop

