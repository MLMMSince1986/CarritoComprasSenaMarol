@extends('dashboard.master')
@section('titulo','Personas')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Listado de Personas</h1>
    <br>
    <a href="{{url('dashboard/Person/create')}}" class="btn btn-info btn-sm"><b><font color="yellow">NUEVA PERSONA</font></b></a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Persona</th>
                <th>Tipo de Persona</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo de Documento</th>
                <th>Numero de Documento</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha Creacion</th>
                <th>Fecha Actualizacion</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Person as $Person)
            <tr>
                <td scope="row">{{$Person->id}}</td>
                <td>{{$Person->type}}</td>
                <td>{{$Person->First_Name}}</td>
                <td>{{$Person->Last_Name}}</td>
                <td>{{$Person->Document_type}}</td>
                <td>{{$Person->Document_Number}}</td>
                <td>{{$Person->Adress}}</td>
                <td>{{$Person->Phone}}</td>
                <td>{{$Person->Email}}</td>
                <td>{{$Person->created_at}}</td>
                <td>{{$Person->updated_at}}</td>
                <td>
                    <a href="{{route('Person.show',$Person->id)}}" class="btn btn-success">Detalle</a>
                </td>
                <td>
                    <a href="{{url('dashboard/Person/'.$Person->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/Person/'.$Person->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection