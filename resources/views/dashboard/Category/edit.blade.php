@extends('dashboard.master')
@section('titulo','NuevaCategoria')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4">Modificar Categoria</h1>
   <form action="{{ url('dashboard/Category/'.$Category->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" value="{{$Category->name}}" placeholder="Nombre Categoria">
        </div>
    </div>
    <div class="form-group row">
        <label for="description">Descripcion</label>
        <div class="col-sm-10"> 
            <textarea class="form-control" name="description" id="description">{{$Category->description}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="state">Estado</label>
        <div class="col-sm-10"> 
            <select class="form-control" name="state" id="state" value="{{$Category->state}}">
                <option value="1">{{ $Category->state == 1 ? '' : '' }}Activo</option>
                <option value="0">{{ $Category->state == 0 ? '' : '' }}Inactivo</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info">Actualizar</button>
           <a href="{{url('dashboard/Category')}}" class="btn btn-dark">Regresar</a>
        </div>
    </div>
  </form>
</div> 

@endsection