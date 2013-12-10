@extends('layouts.master')

@section('content') 
	<h1>Your Collectives</h1>

	<p>{{ link_to_action('CollectiveController@create', 'Create New') }}
	    
	</p>

	<?php $usercollectivepasses = CollectivePass::UserPasses()->get();?>
	
	@foreach($usercollectivepasses as $collectivepass)
		<?php $collective = Collective::find($collectivepass->collective_id); ?>
		<h2>{{{ $collective->name }}}</h1>
		<h3>Founded by {{{ $collective->founder }}}</h2>
		<h3>Members: {{{ $collective->member_number}}}</h2>
		<p>
			{{ link_to_route('collectives.show', 'show', $collective->id) }}
			{{ link_to_route('collectives.edit', 'edit', $collective->id) }}
	        {{ link_to_route('collectives.destroy', 'destroy', $collective->id) }}
	    </p>
	@endforeach

	<h1>Other Collectives</h1> 

	<?php $othercollectivepasses = CollectivePass::UserPasses()->get();?>
	<!-- Parse out users groups --> 
	@foreach($othercollectivepasses as $collectivepass)
		@if(!$collectivepass->hasUser(Auth::user()->id));
		<?php $collective = Collective::find($collectivepass->collective_id); ?>
		<h2>{{{ $collective->name }}}</h1>
		<h3>Founded by {{{ $collective->founder }}}</h2>
		<h3>Members: {{{ $collective->member_number}}}</h2>
		@endif
	@endforeach

@stop
