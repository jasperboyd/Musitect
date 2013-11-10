@foreach($song as $songs); 
	{{ link_to("tasks/$task->id", $tasks->title); }} 
@endforeach