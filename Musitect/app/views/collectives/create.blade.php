@extends('layouts.master') 

@section('content')

	<h1>Create Collective</h1> 

	{{ Form::open(['route' => 'collectives.store']) }}

	@include('collectives.partials.collectiveform')

	{{ Form::hidden('founder_id', Auth::user()->id)}}

	{{ Form::hidden('member_number', 1)}}

	<p>{{ Form::submit('Found it!') }}</p>

	{{ Form::close() }}

@stop
