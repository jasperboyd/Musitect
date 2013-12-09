@extends('layouts.master')

@section('content')

<?php $song = Song::find($songid) ?>

{{Form::open(array('method' => 'DELETE', 'route' => ['song.destroy', $song->id] ))}}

	<p>Are you sure you want to delete {{{ $song->title }}}? {{Form::submit('Absolutely!')}}</p> 

{{Form::close()}}

@stop