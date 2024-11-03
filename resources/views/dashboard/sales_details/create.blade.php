@extends('dashboard.master')
@section('titulo','Nuevo Detalle de Venta')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
   <form action="{{ route('sales_details.store') }}" method="post">
    <legend><b><font color="lime">NUEVO DETALLE DE VENTA</font></b></legend>
    @csrf
    <div class="form-group">
        <label for="sale_id" class="form-label"><b><font color="teal">Venta</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="sale_id" id="sale_id" placeholder="Ingresa la venta">
        </div>
    </div>
    <div class="form-group">
        <label for="article_id" class="form-label"><b><font color="teal">Articulo</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="article_id" id="article_id" placeholder="Ingresa el Articulo">
        </div>
    </div>
    <div class="form-group">
        <label for="quantity" class="col-sm-2 col-form-label"><b><font color="teal">Cantidad</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Ingresa la Cantidad">
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-2 col-form-label"><b><font color="teal">Precio</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="price" id="price" placeholder="Ingresa precio">
        </div>
    </div>
    <div class="form-group">
        <label for="discount" class="col-sm-2 col-form-label"><b><font color="teal">Descuento</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="discount" id="discount" placeholder="Ingresa el Descuento">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info"><b><font color="yellow">Registrar</font></b></button>
           <a href="{{url('dashboard/sales_details')}}" class="btn btn-dark"><b><font color="yellow">Regresar</font></b></a>
        </div>
    </div>
  </form>
</div> 

@endsection