<!-- This will eventually be deleted -->
@extends('layouts.master')

@section('content')

<!-- Tie registration into welcome --> 

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