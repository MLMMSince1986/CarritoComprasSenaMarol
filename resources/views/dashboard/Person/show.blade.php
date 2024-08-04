@extends('dashboard.master')
@section('titulo','Detalle de Persona')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
<div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                    <a href="{{url('dashboard/Person')}}" class="btn btn-dark">REGRESAR</a>
                    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card-header">
                    <h5 class="m-0"><td><b><font color="red">DETALLE DE PERSONA</font></b></td></h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                        <tr>
                            <td><b>Tipo de Persona</b></td>
                            <td>{{$Person->type}}</td>
                        </tr>
                        <tr>
                            <td><b>Nombres</b></td>
                            <td>{{$Person->First_Name}}</td>
                        </tr>
                        <tr>
                            <td><b>Apellidos</b></td>
                            <td>{{$Person->Last_Name}}</td>
                        </tr>
                        <tr>
                            <td><b>Tipo de Documento</b></td>
                            <td>{{$Person->Document_type}}</td>
                        </tr>
                        <tr>
                            <td><b>Numero de Documento</b></td>
                            <td>{{$Person->Document_Number}}</td>
                        </tr>
                        <tr>
                            <td><b>Dirección de Residencia</b></td>
                            <td>{{$Person->Adress}}</td>
                        </tr>
                        <tr>
                            <td><b>Teléfono</b></td>
                            <td>{{$Person->Phone}}</td>
                        </tr>
                        <tr>
                            <td><b>Correo Electrónico</b></td>
                            <td>{{$Person->Email}}</td>
                        </tr>
                        <tr>
                            <td><b>Correo Electrónico</b></td>
                            <td>{{$Person->Email}}</td>
                        </tr>
        
    </div>
</div>
@endsection