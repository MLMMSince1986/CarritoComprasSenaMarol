@extends('dashboard.master')
@section('titulo','Categorias')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Listado de categorias</h1>
    <br>
    <a href="{{url('dashboard/Category/create')}}" class="btn btn-success btn-sm">Nueva Categoria</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Categoria</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Category as $Category)
            <tr>
                <td scope="row">{{ $Category->id }}</td>
                <td>{{$Category->name}}</td>
                <td>{{$Category->description}}</td>
                <td>{{$Category->state ? _('ACTIVO') : _('INACTIVO')}}</td>
                <td><a href="{{url('dashboard/Category/'.$Category->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                <td>
                    <form action="{{ url('dashboard/Category/'.$Category->id) }}" method="post">
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

</main>
@endsection