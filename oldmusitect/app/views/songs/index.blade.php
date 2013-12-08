@foreach($song as $songs); 
	{{ link_to("songs/$song->id", $songs->title); }} 
@endforeach