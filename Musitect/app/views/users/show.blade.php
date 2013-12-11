@extends('layouts.master')

@section('content')

<article class="profile">
@if($user->first_name != NULL)
@if($user->last_name != NULL)
<h1>{{{$user->first_name}}} {{{$user->last_name}}}</h1>
@else
<h1>{{{$user->first_name}}}</h1> 
@endif
@else 
<h1>{{{$user->username}}}</h1>
@endif
@if($user->primary_instrument != NULL)
<h2>Primarily plays {{{$user->primary_instrument}}}</h2> 
@endif
</article>

	
@stop