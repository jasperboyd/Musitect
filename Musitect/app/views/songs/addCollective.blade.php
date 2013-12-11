<ol>
@foreach($collectives as $collective)
	<li>{{link_to_route('song.collective.set', $collective->name, [$collective->id, $song->id])}}</li>	
@endforeach
</ol>