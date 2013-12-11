@extends('layouts.master')

@section('content') 
	<article class="collective_list">

	<h1>Your Collectives</h1>

	<p>{{ link_to_action('CollectiveController@create', 'Found A New Collective') }}</p>

	<?php 

	$user = Auth::User(); 
	$usercollectives = $user->collectives;	
	
	?>
	
	@foreach($usercollectives as $collective)

		<section class="collective">
		
		<h2>{{{ $collective->name }}}</h1>
		
		<h3>Founded by <span class="highlight">{{{ $collective->founder }}}</span></h2>
		
		<h3>Members: <span class="highlight">{{{ $collective->member_number}}}</span></h2>
		
		<p>
			{{ link_to_route('collectives.show', 'show', $collective->id) }}
			{{ link_to_action('CollectiveController@edit', 'edit', $collective->id) }}
	        <span class="burn">{{ link_to_route('collectives.destroy', 'disband', $collective->id) }}</span>
	    </p>

		</section>
	
	@endforeach
	
	</article>

@stop
