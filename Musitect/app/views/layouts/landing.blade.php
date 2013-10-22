@extends('layouts.master')

@section('content')
<article> 
		<h3>What Is It?</h3> 
		<p>
			Musitect is a songwriting tool that gives users the ability to 
			composer chords and lyrics in a comfortable way, putting the 
			focus on the musical choices that need to be made and eliminating 
			the difficulty in hearing / recording those changes. 
		</p> 
    	<h3>What Do You Get?</h3> 
    	<ul> 
    		<li>Lyrics</li>
    		<li>Chords</li>
    		<li>Other Stuff</li>
    		<li>Even more Stuff</li> 
    	</ul>
</article>
<aside> 
        <h3>Register</h3> 
{{Form::open(array('url' => 'register'))}}
	{{ Form::label('username', 'User Name');}}
	{{ Form::text('username');}}
	{{ Form::label('email', 'Email Address');}}
	{{ Form::email('email');}}
	{{ Form::label('password', 'Password');}}
	{{ Form::password('password');}}
	{{ Form::label('password', 'Confirm Password');}}
	{{ Form::password('password');}}
    {{ Form::submit('Sign Up');}}
{{Form::close()}}
</aside> 
<aside> 
        <h3>Login</h3>
{{Form::open(array('url' => 'login'))}}
        {{ Form::label('username', 'User Name');}}
		{{ Form::text('username');}}
		{{ Form::label('password', 'Password');}}
	    {{ Form::password('password');}}
	    {{ Form::submit('Login');}}
{{Form::close()}}
</aside> 
@stop