@extends('layouts.master')

@section('content')

<article> 
		<h1>Welcome</h1>
		<p>
			Musitect is a songwriting tool that gives users the ability to 
			composer chords and lyrics in a comfortable way, putting the 
			focus on the musical choices that need to be made and eliminating 
			the difficulty in hearing / recording those changes. 
		</p> 
		<h1>Features</h1> 
    	<ul> 
    		<li>Squat</li>
    	</ul>
</article>

<section> 
	<h1>Register</h1>
	@include('user.create')
</section> 

<section> 
	<h1>Login</h1>
	
</section> 

@stop