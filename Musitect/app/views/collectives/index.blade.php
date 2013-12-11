@extends('layouts.master')

@section('content') 
	<section=id="collectives_index">

	<h1>Your Collectives</h1>

	<p>{{ link_to_action('CollectiveController@create', 'Create New') }}
	    
	</p>

	<?php 

	$user = Auth::User(); 
	$usercollectives = $user->collectives;	
	
	?>
	
	@foreach($usercollectives as $collective)
		
		<h2>{{{ $collective->name }}}</h1>
		
		<h3>Founded by {{{ $collective->founder }}}</h2>
		
		<h3>Members: {{{ $collective->member_number}}}</h2>
		
		<p>
			{{ link_to_route('collectives.show', 'show', $collective->id) }}
			{{ link_to_action('CollectiveController@edit', 'edit', $collective->id) }}
	        {{ link_to_route('collectives.destroy', 'destroy', $collective->id) }}
	    </p>
	
	@endforeach
	
	</section>

@stop
