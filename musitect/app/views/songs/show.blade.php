@extends('layout.master')

@section('content')
<h1>{{$song->title}}</h1>
<article>{{$song->lyrics}}</article> 
<p>{{link_to('/songs', 'your library')}}

@stop