<p>{{ Form::label('user_id', 'User Id:') }}
       {{ Form::text('user_id') }}</p>

<p>{{ Form::label('collective_id', 'Collective Id:') }}
       {{ Form::text('collective_id') }}</p>

<p>{{ Form::label('role', 'Role:') }}
       {{ Form::text('role') }}</p>

<p>{{ Form::submit('Generate Collective Pass') }}</p>