@extends('dashboard.master')
@section('titulo','Nueva Persona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4"><b><font color="PURPURA">MODIFICAR PERSONA</font></b></h1>
   <form action="{{ url('dashboard/Person/'.$Person->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="Type" class="col-sm-2 col-form-label"><b><font color="blue">TIPO DE PERSONA</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Type" id="Type" value="{{$Person->Type}}" placeholder="Persona Natural, Empresa o Proveedor">
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label"><b><font color="blue">NOMBRES</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{$Person->First_Name}}" placeholder="Ingresa Nombres">
        </div>
    </div>
    <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label"><b><font color="blue">APELLIDOS</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{$Person->Last_Name}}" placeholder="Ingresa Apellidos">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Type" class="col-sm-2 col-form-label"><b><font color="blue">TIPO DE DOCUMENTO</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Document_Type" id="Document_Type" value="{{$Person->Document_Type}}" placeholder="CC, TI, Pasaporte o NIT">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Number" class="col-sm-2 col-form-label"><b><font color="blue">NUMERO DE DOCUMENTO</font></b></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Document_Number" id="Document_Number" value="{{$Person->Document_Number}}" placeholder="Ingresa el Numero de Documento">
        </div>
    </div>
    <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label"><b><font color="blue">DIRECCION DE RESIDENCIA</font></b></label>
        <div class="col-sm-6"> 
        <input type="text" class="form-control" name="Adress" id="Adress" value="{{$Person->Adress}}" placeholder="Ingresa direccion de Residencia">
        </div>
    </div>
    <div class="form-group row">
        <label for="Phone" class="col-sm-2 col-form-label"><b><font color="blue">NUMERO DE TELEFONO</font></b></label>
        <div class="col-sm-6"> 
        <input type="text" class="form-control" name="Phone" id="Phone" value="{{$Person->Phone}}" placeholder="Ingresa Numero de Telefono">
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label"><b><font color="blue">CORREO ELECTRONICO</font></b></label>
        <div class="col-sm-6"> 
        <input type="text" class="form-control" name="Email" id="Email" value="{{$Person->Email}}" placeholder="Ingresa Correo Electronico">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 offset-sm-2">
           <button type="submit" class="btn btn-info"><b><font color="red">REGISTRAR</font></b></button>
           <a href="{{url('dashboard/Person')}}" class="btn btn-dark"><b><font color="magenta">REGRESAR</font></b></a>
        </div>
    </div>
  </form>
</div> 

@endsection