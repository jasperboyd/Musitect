{{Form::open(['url' => 'login'])}}

<p>{{ Form::label('email', 'Email') }}
    {{ Form::text('email') }}</p>

<p>{{ Form::label('password', 'Password') }}
   {{ Form::text('password') }}</p>

<p>{{ Form::submit('Submit') }}</p>

{{Form::close()}}