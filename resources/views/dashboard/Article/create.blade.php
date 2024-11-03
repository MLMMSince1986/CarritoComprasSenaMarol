@extends('dashboard.master')
@section('titulo','NuevoArticulo')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
   <form action="{{ route('Article.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="code" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="code" id="code" placeholder="Ingresa el Codigo del Articulo">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="Ingresa el Nombre del Articulo">
        </div>
    </div>
    <div class="form-group row">
        <label for="Category" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
            <select name="Category" id="Category" class="form-select" required >
                <option value="">Seleccionar Categoria</option>
                @foreach($Category as $Category)
                <option value="{{$Category->id}}">{{$Category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Sale_Price" class="col-sm-2 col-form-label">Precio de Venta</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Sale_Price" id="Sale_Price" placeholder="Ingresa el Valor del Articulo">
        </div>
    </div>
    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="stock" id="stock" placeholder="Ingresa la Cantidad Disponible">
        </div>
    </div>
    <div class="form-group row">
        <label for="description">Descripcion</label>
        <div class="col-sm-10"> 
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="state">Estado</label>
        <div class="col-sm-10"> 
            <select class="form-control" name="state" id="state">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info">Registrar</button>
           <a href="{{url('dashboard/Article')}}" class="btn btn-dark">Regresar</a>
        </div>
    </div>
  </form>
</div> 

@endsection