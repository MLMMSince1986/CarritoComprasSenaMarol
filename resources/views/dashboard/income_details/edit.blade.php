@extends('dashboard.master')
@section('titulo','Modificar Ingreso de Detalles')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
   <form action="{{ url('dashboard/income_details/'.$income_details->id) }}" method="post">
   <legend><b><font color="lime">EDITAR INGRESO DE DETALLES</font></b></legend>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="income_id" class="form-label"><b><font color="teal">Ingreso</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="income_id" id="income_id" value="{{$income_details->income_id}}" placeholder="Ingresa el Usuario">
        </div>
    </div>
    <div class="form-group">
        <label for="article_id" class="form-label"><b><font color="teal">Articulo</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="article_id" id="article_id" value="{{$income_details->article_id}}" placeholder="Ingresa el Usuario">
        </div>
    </div>
    <div class="form-group">
        <label for="quantity" class="col-sm-2 col-form-label"><b><font color="teal">Cantidad</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="quantity" id="quantity" value="{{$income_details->quantity}}" placeholder="Ingresa Tipo de Recibo">
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-2 col-form-label"><b><font color="teal">Precio</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="price" id="price" value="{{$income_details->price}}" placeholder="Ingresa el # Serie de Recibo">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info"><b><font color="yellow">Actualizar</font></b></button>
           <a href="{{url('dashboard/income_details')}}" class="btn btn-dark"><b><font color="yellow">Regresar</font></b></a>
        </div>
    </div>
  </form>
</div> 

@endsection