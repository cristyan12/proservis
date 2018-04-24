@extends('app')

@section('content')
	<h1>Listado de prestadores</h1>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nit</th>
				<th>Cedula</th>
				<th>Tipo de usuario</th>
				<th>Tipo de contrato</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Dirección</th>
				<th>Barrio</th>
				<th>Teléfono</th>
				<th>Genero</th>
				<th>Profesión</th>
				<th>Estado</th>
				<th>Borrado</th>
			</tr>
		</thead>
		<tbody>
			@foreach($prestadores as $prestador)
				<th>{{ $pretador->id }}</th>
				<th>{{ $pretador->nit }}</th>
				<th>{{ $pretador->cedula }}</th>
				<th>{{ $pretador->usuario_tipo }}</th>
				<th>{{ $pretador->contrato_id }}</th>
				<th>{{ $pretador->nombre }}</th>
				<th>{{ $pretador->apellido }}</th>
				<th>{{ $pretador->direccion }}</th>
				<th>{{ $pretador->barrio_id }}</th>
				<th>{{ $pretador->telefono }}</th>
				<th>{{ $pretador->genero_id }}</th>
				<th>{{ $pretador->profesion_id }}</th>
				<th>{{ $pretador->estado }}</th>
				<th>{{ $pretador->borrado }}</th>
			@endforeach
		</tbody>
	</table>
@endsection