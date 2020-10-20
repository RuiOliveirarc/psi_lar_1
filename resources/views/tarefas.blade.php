<h1>tarefas para hoje</h1>
<ul>
	@foreach($tarefas as $tarefa)
		<li>{{$tarefa}}</li>
	@endforeach
</ul>