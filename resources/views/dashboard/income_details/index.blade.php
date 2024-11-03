@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Listado de Detalle de Ingreso</h1>
    <br>
    <a href="{{url('dashboard/income_details/create')}}" class="btn btn-info btn-sm"> Nuevo Ingreso</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Detalle de Ingreso</th>
                <th>Ingreso</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($income_details as $income_details)
            <tr>
                <td scope="row">{{$income_details->id}}</td>
                <td>{{$income_details->income_id}}</td>
                <td>{{$income_details->article_id}}</td>
                <td>{{$income_details->quantity}}</td>
                <td>{{$income_details->price}}</td>
                <td>
                    <a href="{{url('dashboard/income_details/'.$income_details->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/income_details/'.$income_details->id) }}" method="post">
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
