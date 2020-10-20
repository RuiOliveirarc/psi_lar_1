@if(isset($equipas))
	<h1>Lista de equipas</h1>
	@foreach($equipas as $equipa)
		<h2>{{$equipa}}</h2>
	@endforeach
	<p>Está tudo!</p>
@else
	<h1>Só uma equipa</h1>
	{{$equipa}}
@endif