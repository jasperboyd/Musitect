@extends('layouts.landing')

@section('firstname') 

<section id="firstname">
{{Form::open()}}

	{{echo Form::label('firstname', 'First Name');}}
	{{echo Form::text('firstname');}}
    {{echo Form::submit('Speak');}}
{{Form::close()}}
</section>
@stop