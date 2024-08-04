@extends('dashboard.master')
@section('titulo','Articulos')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Listado de Articulos</h1>
    <br>
    <a href="{{url('dashboard/Article/create')}}" class="btn btn-info btn-sm"> Nuevo Articulo</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Producto</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio de Venta</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Categoria</th>
                <th>Fecha Creacion</th>
                <th>Fecha Actualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Article as $Article)
            <tr>
                <td scope="row">{{$Article->id}}</td>
                <td>{{$Article->code}}</td>
                <td>{{$Article->name}}</td>
                <td>{{$Article->Sale_Price}}</td>
                <td>{{$Article->stock}}</td>
                <td>{{$Article->description}}</td>
                <td>{{$Article->state ? _('ACTIVO') : _('INACTIVO') }}</td>
                <td>{{$Article->Category->name}}</td>
                <td>{{$Article->created_at}}</td>
                <td>{{$Article->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/Article/'.$Article->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/Article/'.$Article->id) }}" method="post">
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