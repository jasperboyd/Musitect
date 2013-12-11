@extends('layouts.master')

@section('content')

<article class="landing">
<h1>Welcome to Musitect the online toolkit for songwriters.</h1>
<section class="registration">
<h2>New here?</h2>
@include('registration.index')
</section>
<section class="login">
<h2>Or an old friend?</h2> 
<p>Login with you email and password</p>
@include('session.create')
</section>
</article>

@stop
