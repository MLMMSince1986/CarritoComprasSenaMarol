@extends('dashboard.master')
@section('titulo','Nueva Persona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
   <form action="{{ route('Person.store') }}" method="post">
    @csrf
    <div class="form-group row">
        <label for="type" class="col-sm-2 col-form-label">Tipo de Persona</label>
        <div class="col-sm-10">
            <select class="form-control" name="type" id="type">
                <option value="">Seleccione Tipo de Persona</option>
                <option value="Persona Natural">Persona Natural</option>
                <option value="Empresa">Empresa</option>
                <option value="Proveedor">Proveedor</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombres</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Ingresa Nombres">
        </div>
    </div>
    <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Ingresa Apellidos">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de Documento</label>
        <div class="col-sm-10">
            <select class="form-control" name="Document_Type" id="Document_Type">
                <option value="">Seleccione Tipo de Documento</option>
                <option value="CC">CC</option>
                <option value="TI">TI</option>
                <option value="Pasaporte">Pasaporte</option>
                <option value="NIT">NIT</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Number" class="col-sm-2 col-form-label">Numero de Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Ingresa el Numero de Documento">
        </div>
    </div>
    <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label">Direccion de Residencia</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Ingresa direccion de Residencia">
        </div>
    </div>
    <div class="form-group row">
        <label for="Phone" class="col-sm-2 col-form-label">Numero Telefonico</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Ingresa Numero de Telefono">
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="Email" id="Email" placeholder="Ingresa Correo Electronico">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info"><b><font color="red">REGISTRAR</font></b></button>
           <a href="{{url('dashboard/Person')}}" class="btn btn-dark"><b><font color="magenta">REGRESAR</font></b></a>
        </div>
    </div>
  </form>
</div> 

@endsection