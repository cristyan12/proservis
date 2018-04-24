@extends('app')

@section('content')
	<h1>Editar Prestador {{ title_case($prestador->nombre .' '. $prestador->apellido) }}</h1>
	<hr>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<form action="{{ route('prestador.update', $prestador->id) }}" method="POST">

		{{ method_field('PUT') }}

		{{ csrf_field() }}

		{{-- Nit y cedula --}}
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nit">Nit</label>
		      <input type="text" class="form-control" name="nit" placeholder="Nit" value="{{ $prestador->nit or old('nit') }}">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="cedula">Cedula</label>
		      <input type="text" class="form-control" name="cedula" placeholder="Cedula" value="{{ $prestador->cedula or old('cedula') }}">
		    </div>
		</div>
		
		{{-- usuario_id y contrato_id --}}
		<div class="form-row">
			<div class="form-group col-md-6">
			    <label for="usuario_tipo">Usuario</label>
			    <select name="usuario_tipo" class="form-control">
			    	<option selected>{{ $prestador->usuario_tipo or old('usuario_tipo') }}</option>
			        <option>2</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
			    <label for="contrato_id">Contrato</label>
			    <select name="contrato_id" class="form-control">
			    	<option selected>{{ $prestador->contrato_id or old('contrato_id') }}</option>
			        <option>2</option>
			    </select>
			</div>
		</div>
		
		{{-- nombre y apellido --}}
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nombre">Nombre</label>
		      <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $prestador->nombre or old('nombre') }}">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="apellido">Apellido</label>
		      <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{ $prestador->apellido or old('apellido') }}">
		    </div>
		</div>

		{{-- direccion y barrio_id --}}
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="direccion">Dirección</label>
		      <input type="text" class="form-control" name="direccion"  placeholder="127 calle Elm" value="{{ $prestador->direccion or old('direccion') }}">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="barrio_id">Barrio</label>
		      <select id="barrio_id" name="barrio_id" class="form-control">
		        <option selected>{{ $prestador->barrio_id or old('barrio_id') }}</option>
		        <option>2</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="telefono">Teléfono</label>
		      <input type="text" class="form-control" name="telefono" placeholder="+00 000-000-000" value="{{ $prestador->telefono or old('telefono') }}">
		    </div>
		  </div>

		  {{-- genero y profesion --}}
		<div class="form-row">
			<div class="form-group col-md-6">
			    <label for="genero_id">Genero</label>
			    <select id="genero_id" name="genero_id" class="form-control">
			        <option selected>{{ $prestador->genero_id or old('genero_id') }}</option>
			        <option>2</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
			    <label for="profesion_id">Profesión</label>
			    <select id="profesion_id" name="profesion_id" class="form-control">
			        <option selected>{{ $prestador->profesion_id or old('profesion_id') }}</option>
			        <option>1</option>
			    </select>
			</div>
		</div>

		{{-- estado y borrado --}}
		<div class="form-row">
			<div class="form-group col-md-3">
			    <label for="estado">Estado</label>
			    <select name="estado" class="form-control">
			        <option selected>{{ $prestador->estado or old('estado') }}</option>
			        <option>2</option>
			    </select>
			</div>
			<div class="form-group col-md-3">
			    <label for="borrado">Borrado</label>
			    <select name="borrado" class="form-control">
			        <option selected>{{ $prestador->borrado or old('borrado')}}</option>
			        <option>2</option>
			    </select>
			</div>
		</div>
		
		
		<button type="submit" class="btn btn-primary">Actualizar</button>
		
	</form>
@endsection