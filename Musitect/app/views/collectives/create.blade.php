@extends('layouts.master') 

@section('content')

	<h1>Create Collective</h1> 

	{{ Form::open(['route' => 'collectives.store']) }}

	@include('collectives.partials.collectiveform')

	{{ Form::close() }}

@stop
