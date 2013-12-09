<h1>{{{$song->title}}}</h1>

@foreach($phrases as $phrase)
<div class="phrase">
	<p class="chord">{{$phrase->chord}}</p>
	<p class="lyric">{{$phrase->phrase}}</p>  
</div>
@endforeach

