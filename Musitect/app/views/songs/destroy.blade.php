@extends('layouts.master')

@section('content')

<?php $song = Song::find($songid) ?>

{{Form::open(array('method' => 'DELETE', 'route' => ['song.destroy', $song->id] ))}}

	<p>Are you sure you want to delete {{{ $song->title }}}? {{Form::submit('Absolutely!')}}</p> 
	<p>{{link_to_action('HomeController@index', "No I've changed my mind")}}</p>

{{Form::close()}}

@stop