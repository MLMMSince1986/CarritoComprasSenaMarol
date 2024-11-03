@extends('dashboard.master')
@section('titulo','Nuevo Ingreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
   <form action="{{ route('Income.store') }}" method="post">
    <legend><b><font color="lime">NUEVO INGRESO</font></b></legend>
    @csrf
    <div class="form-group">
        <label for="provider_id" class="form-label"><b><font color="teal">Proveedor</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="provider_id" id="provider_id" placeholder="Ingresa el Usuario">
        </div>
    </div>
    <div class="form-group">
        <label for="user_id" class="form-label"><b><font color="teal">Usuario</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="Ingresa el Usuario">
        </div>
    </div>
    <div class="form-group">
        <label for="receipt_type" class="col-sm-2 col-form-label"><b><font color="teal">Tipo de Recibo</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa Tipo de Recibo">
        </div>
    </div>
    <div class="form-group">
        <label for="receipt_series" class="col-sm-2 col-form-label"><b><font color="teal"># Serie de Recibo</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa el # Serie de Recibo">
        </div>
    </div>
    <div class="form-group">
        <label for="receipt_number" class="col-sm-2 col-form-label"><b><font color="teal"># Numero de Recibo</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el # Numero de Recibo">
        </div>
    </div>
    <div class="form-group">
        <label for="date" class="col-sm-2 col-form-label"><b><font color="teal">Fecha de Ingreso</font></b></label>
        <div class="col-sm-6">
            <input type="date" class="form-control" name="date" id="date" placeholder="Ingresa valor del Impuesto">
        </div>
    </div>
    <div class="form-group">
        <label for="tax" class="col-sm-2 col-form-label"><b><font color="teal">Impuesto</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="tax" id="tax" placeholder="Ingresa valor del Impuesto">
        </div>
    </div>
    <div class="form-group">
        <label for="total" class="col-sm-2 col-form-label"><b><font color="teal">Total</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="total" id="total" placeholder="Ingresa valor Total">
        </div>
    </div>
    <div class="form-group">
        <label for="status"><b><font color="teal">Estado</font></b></label>
        <div class="col-sm-6"> 
            <select class="form-control" name="status" id="status">
                <option value="1">Recibido</option>
                <option value="0">Rechazado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info"><b><font color="yellow">Registrar</font></b></button>
           <a href="{{url('dashboard/Income')}}" class="btn btn-dark"><b><font color="yellow">Regresar</font></b></a>
        </div>
    </div>
  </form>
</div> 

@endsection

