@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/articulos" method="POST">
@csrf <!--Directiva de laravel para la vulnerabilidad falsificacion de peticion en sitio cruzado(Cross Site Request Forgery)-->
<div class="mb-3">
	<label for="" class="form-label">Codigo</label>
	<input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
</div class="mb-3">
<div>
	<label for="" class="form-label">Descripcion</label>
	<input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
	<label for="" class="form-label">Cantidad</label>
	<input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="1">
</div>
<div class="mb-3">
	<label for="" class="form-label">Precio</label>
	<input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="1">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection