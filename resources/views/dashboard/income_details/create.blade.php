@extends('dashboard.master')
@section('titulo','Nuevo Ingreso de Detalles')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
   <form action="{{ route('income_details.store') }}" method="post">
    <legend><b><font color="lime">NUEVO DETALLE DE INGRESO</font></b></legend>
    @csrf
    <div class="form-group">
        <label for="income_id" class="form-label"><b><font color="teal">Ingreso</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="income_id" id="income_id" placeholder="Ingresa el Usuario">
        </div>
    </div>
    <div class="form-group">
        <label for="article_id" class="form-label"><b><font color="teal">Articulo</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="article_id" id="article_id" placeholder="Ingresa el Usuario">
        </div>
    </div>
    <div class="form-group">
        <label for="quantity" class="col-sm-2 col-form-label"><b><font color="teal">Cantidad</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Ingresa Tipo de Recibo">
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-2 col-form-label"><b><font color="teal">Precio</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="price" id="price" placeholder="Ingresa el # Serie de Recibo">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info"><b><font color="yellow">Registrar</font></b></button>
           <a href="{{url('dashboard/income_details')}}" class="btn btn-dark"><b><font color="yellow">Regresar</font></b></a>
        </div>
    </div>
  </form>
</div> 

@endsection

