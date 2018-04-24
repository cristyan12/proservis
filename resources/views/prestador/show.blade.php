@extends('app')

@section('content')
	<h1>Detalle del prestador de servicios: {{ title_case($prestador->nombre .' '. $prestador->apellido) }}</h1>
	<hr>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">{{ title_case($prestador->nombre .' '. $prestador->apellido) }}</h5>
			<h6 class="card-subtitle mb-2 text-muted">Nit: {{ $prestador->nit }} Cédula: {{ $prestador->cedula }}</h6>
			<p class="card-text">Tipo de usuario: {{ $prestador->usuario_tipo }}</p>
			<p class="card-text">Contrato: {{ $prestador->contrato_id }}</p>
			<p class="card-text">Dirección: {{ $prestador->direccion }}</p>
			<p class="card-text">Barrio: {{ $prestador->barrio_id }}</p>
			<p class="card-text">Teléfono: +{{ $prestador->telefono }}</p>
			<p class="card-text">Genero: {{ $prestador->genero_id }}</p>
			<p class="card-text">Profesión: {{ $prestador->profesion_id }}</p>
			<p class="card-text">Estado: {{ $prestador->estado }}</p>
			<p class="card-text">Borrado: {{ $prestador->borrado }}</p>
			<a href="#" class="card-link">Lorem ipsum.</a>
	    	<a href="#" class="card-link">Lorem ipsum2.</a>
		</div>
	</div>
@endsection