@extends('layouts.master')

@section('content')

<h1>{{{$song->title}}}</h1>

@include('songs.partials.phraseloop')


<p>{{ link_to_action('SongController@edit', 'edit', $song->id) }} | 
{{ link_to_route('song.showdestroy', 'destroy', $song->id) }}</p>

@stop

