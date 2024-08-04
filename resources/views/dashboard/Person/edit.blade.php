@extends('dashboard.master')
@section('titulo','Nueva Persona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
<h1 class="mb-4">Modificar Persona</h1>
   <form action="{{ url('dashboard/Person/'.$Person->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group row">
        <label for="type" class="col-sm-2 col-form-label">Tipo de Persona</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="type" id="type" value="{{$Person->type}}" placeholder="Persona Natural, Empresa o Proveedor">
        </div>
    </div>
    <div class="form-group row">
        <label for="First_Name" class="col-sm-2 col-form-label">Nombres</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{$Person->First_Name}}" placeholder="Ingresa Nombres">
        </div>
    </div>
    <div class="form-group row">
        <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{$Person->Last_Name}}" placeholder="Ingresa Apellidos">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_type" class="col-sm-2 col-form-label">Tipo de Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Document_type" id="Document_type" value="{{$Person->Document_type}}" placeholder="CC, TI, Pasaporte o NIT">
        </div>
    </div>
    <div class="form-group row">
        <label for="Document_Number" class="col-sm-2 col-form-label">Numero de Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="Document_Number" id="Document_Number" value="{{$Person->Document_Number}}" placeholder="Ingresa el Numero de Documento">
        </div>
    </div>
    <div class="form-group row">
        <label for="Adress" class="col-sm-2 col-form-label">Direccion de Residencia</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="Adress" id="Adress" value="{{$Person->Adress}}" placeholder="Ingresa direccion de Residencia">
        </div>
    </div>
    <div class="form-group row">
        <label for="Phone" class="col-sm-2 col-form-label">Numero Telefonico</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="Phone" id="Phone" value="{{$Person->Phone}}" placeholder="Ingresa Numero de Telefono">
        </div>
    </div>
    <div class="form-group row">
        <label for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10"> 
        <input type="text" class="form-control" name="Email" id="Email" value="{{$Person->Email}}" placeholder="Ingresa Correo Electronico">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
           <button type="submit" class="btn btn-info">Registrar</button>
           <a href="{{url('dashboard/Person')}}" class="btn btn-dark">Regresar</a>
        </div>
    </div>
  </form>
</div> 

@endsection