@extends('layouts.master')

@section('content')

	<h1>The Musitects</h1>

	<ul>
	@foreach($users as $user)
		<li>{{$user->username}}</li>
		<ol>
			<li>{{link_to_action('UserController@show', 'profile', $user->id)}}</li>
			<li>Add to Collective:</li>
			<ol>
				@foreach($collectives as $collective)

				<li>{{link_to_route('collectives.user.add', $collective->name, [$collective->id, $user->id])}}</li>
				
				@endforeach
			</ol>
		</ol>
	@endforeach
	</ul>
@stop