@extends('layouts.master') 

@section('content')

	<h1>Edit Collective</h1> 

	{{ Form::model($collective, ['route' => ['collectives.update', $collective->id], 'method'=>'PUT']) }}

	@include('collectives.partials.collectiveform')

	{{ Form::close() }}

@stop