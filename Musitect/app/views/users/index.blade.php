@extends('layouts.master')

@section('content')
	
	<article class="user_list"> 

	<h1>The Musitects</h1>

	<ul>
	@foreach($users as $user)
		<section class="user">
		<p>
			<span class="highlight">{{{$user->username}}}</span>
			Profile: {{link_to_action('UserController@show', $user->username, $user->id)}}
			Add to Collective:
			
				@foreach($collectives as $collective)

				{{link_to_route('collectives.user.add', $collective->name, [$collective->id, $user->id])}}
				
				@endforeach
			
		</p>
		</section>
	@endforeach
	</ul>

	</article>
@stop