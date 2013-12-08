@extends('layouts.master')

@section('content')

<article>
<h1>Welcome to Musitect</h1>
<h2>Are you a new user?</h2> 
@include('registration.index')
<h2>Or an old friend?</h2> 
@include('session.create')
</article>

@stop
