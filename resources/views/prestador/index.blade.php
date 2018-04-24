@extends('app')

@section('content')
	<h1>Listado de prestadores</h1>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nit</th>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Dirección</th>
				<th>Teléfono</th>
				 <th colspan="3">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($prestadores as $prestador)
				<tr>
					<td>{{ $prestador->id }}</td>
					<td>{{ $prestador->nit }}</td>
					<td>{{ $prestador->cedula }}</td>
					<td>{{ $prestador->nombre }}</td>
					<td>{{ $prestador->apellido }}</td>
					<td>{{ $prestador->direccion }}</td>
					<td>{{ $prestador->telefono }}</td>
					<td width="10px">
                        <a href="{{ route('prestador.show', $prestador->id) }}" class="btn btn-info btn-sm">Ver</a>
					</td>
					<td width="10px">
                        <a href="{{ route('prestador.edit', $prestador->id) }}" class="btn btn-warning btn-sm">Editar</a>
					</td>
					<td width="10px">
                        {!! Form::open(['route' => ['prestador.destroy', $prestador->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-sm btn-danger">
                                Eliminar
                            </button>                           
                        {!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection