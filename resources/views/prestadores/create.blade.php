@extends('app')

@section('content')
	<h1>Nuevo Prestador</h1>
	<hr>
	<form action="{{ route('prestadores.store') }}" method="POST">
		
		{{-- Nit y cedula --}}
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nit">Nit</label>
		      <input type="text" class="form-control" id="nit" placeholder="Nit">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="cedula">Cedula</label>
		      <input type="text" class="form-control" id="cedula" placeholder="Cedula">
		    </div>
		</div>
		
		{{-- usuario_id y contrato_id --}}
		<div class="form-row">
			<div class="form-group col-md-6">
			    <label for="usuario_id">Usuario</label>
			    <select id="usuario_id" class="form-control">
			        <option selected>1 - Admin</option>
			        <option>2 - User</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
			    <label for="contrato_id">Contrato</label>
			    <select id="contrato_id" class="form-control">
			        <option selected>1 - Fijo</option>
			        <option>2 - A destajo</option>
			    </select>
			</div>
		</div>
		
		{{-- nombre y apellido --}}
		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="nombre">Nombre</label>
		      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="apellido">Apellido</label>
		      <input type="text" class="form-control" id="apellido" placeholder="Apellido">
		    </div>
		</div>

		{{-- direccion y barrio_id --}}
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="direccion">Dirección</label>
		      <input type="text" class="form-control" id="direccion" placeholder="127 calle Elm">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="barrio_id">Barrio</label>
		      <select id="barrio_id" class="form-control">
		        <option selected>Choose...</option>
		        <option>La peñita</option>
		        <option>Buenos Aires</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="telefono">Teléfono</label>
		      <input type="text" class="form-control" id="telefono" placeholder="+00 000-000-000">
		    </div>
		  </div>

		  {{-- genero y profesion --}}
		<div class="form-row">
			<div class="form-group col-md-6">
			    <label for="genero_id">Genero</label>
			    <select id="genero_id" class="form-control">
			        <option selected>1 - Masculino</option>
			        <option>2 - Femenino</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
			    <label for="profesion_id">Profesión</label>
			    <select id="profesion_id" class="form-control">
			        <option selected>Elija una...</option>
			        <option>....</option>
			    </select>
			</div>
		</div>

		{{-- estado y borrado --}}
		<div class="form-row">
			<div class="form-group col-md-1">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="estado">
		      <label class="form-check-label" for="estado">
		        Estado
		      </label>
		    </div>
		</div>

		<div class="form-group col-md-1">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="estado">
		      <label class="form-check-label" for="estado">
		        Borrado
		      </label>
		    </div>
		</div>
		</div>
		
		
		<button type="submit" class="btn btn-primary">Guardar</button>
		
	</form>
@endsection