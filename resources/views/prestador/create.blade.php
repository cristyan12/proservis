@extends('app')

@section('content')
	<h1>Nuevo Prestador</h1>
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

	<form action="{{ route('prestador.store') }}" method="POST">

		{{ csrf_field() }}
		
		{{-- Nit y cedula --}}
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nit">Nit</label>
		      <input type="text" class="form-control" name="nit" id="nit" placeholder="Nit">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="cedula">Cedula</label>
		      <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">
		    </div>
		</div>
		
		{{-- usuario_id y contrato_id --}}
		<div class="form-row">
			<div class="form-group col-md-6">
			    <label for="usuario_tipo">Usuario</label>
			    <select id="usuario_tipo" name="usuario_tipo" class="form-control">
			    	<option selected>1</option>
			        <option>2</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
			    <label for="contrato_id">Contrato</label>
			    <select id="contrato_id" name="contrato_id" class="form-control">
			    	<option selected>1</option>
			        <option>2</option>
			    </select>
			</div>
		</div>
		
		{{-- nombre y apellido --}}
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nombre">Nombre</label>
		      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="apellido">Apellido</label>
		      <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
		    </div>
		</div>

		{{-- direccion y barrio_id --}}
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="direccion">Dirección</label>
		      <input type="text" class="form-control" name="direccion" id="direccion" placeholder="127 calle Elm">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="barrio_id">Barrio</label>
		      <select id="barrio_id" name="barrio_id" class="form-control">
		        <option selected>1</option>
		        <option>2</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="telefono">Teléfono</label>
		      <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+00 000-000-000">
		    </div>
		  </div>

		  {{-- genero y profesion --}}
		<div class="form-row">
			<div class="form-group col-md-6">
			    <label for="genero_id">Genero</label>
			    <select id="genero_id" name="genero_id" class="form-control">
			        <option selected>1</option>
			        <option>2</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
			    <label for="profesion_id">Profesión</label>
			    <select id="profesion_id" name="profesion_id" class="form-control">
			        <option selected>1</option>
			        <option>1</option>
			    </select>
			</div>
		</div>

		{{-- estado y borrado --}}
		<div class="form-row">
			<div class="form-group col-md-3">
			    <label for="estado">Estado</label>
			    <select name="estado" class="form-control">
			        <option selected>1</option>
			        <option>2</option>
			    </select>
			</div>
			<div class="form-group col-md-3">
			    <label for="borrado">Estado</label>
			    <select name="borrado" class="form-control">
			        <option selected>1</option>
			        <option>2</option>
			    </select>
			</div>
		</div>
		
		
		<button type="submit" class="btn btn-primary">Guardar</button>
		
	</form>
@endsection