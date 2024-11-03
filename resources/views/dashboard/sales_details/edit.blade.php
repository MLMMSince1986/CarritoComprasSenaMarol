@extends('dashboard.master')
@section('titulo','Modificar Ingreso de Detalles')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
   <form action="{{ url('dashboard/sales_details/'.$sales_details->id) }}" method="post">
   <legend><b><font color="lime">EDITAR INGRESO DE DETALLES</font></b></legend>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="sale_id" class="form-label"><b><font color="teal">Venta</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="sale_id" id="sale_id" value="{{$sales_details->sale_id}}" placeholder="Ingresa la venta">
        </div>
    </div>
    <div class="form-group">
        <label for="article_id" class="form-label"><b><font color="teal">Articulo</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="article_id" id="article_id" value="{{$sales_details->article_id}}" placeholder="Ingresa el Articulo">
        </div>
    </div>
    <div class="form-group">
        <label for="quantity" class="col-sm-2 col-form-label"><b><font color="teal">Cantidad</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="quantity" id="quantity" value="{{$sales_details->quantity}}" placeholder="Ingresa la Cantidad">
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-2 col-form-label"><b><font color="teal">Precio</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="price" id="price" value="{{$sales_details->price}}" placeholder="Ingresa precio">
        </div>
    </div>
    <div class="form-group">
        <label for="discount" class="col-sm-2 col-form-label"><b><font color="teal">Descuento</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="discount" id="discount" value="{{$sales_details->discount}}" placeholder="Ingresa el Descuento">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info"><b><font color="yellow">Actualizar</font></b></button>
           <a href="{{url('dashboard/sales_details')}}" class="btn btn-dark"><b><font color="yellow">Regresar</font></b></a>
        </div>
    </div>
  </form>
</div> 

@endsection