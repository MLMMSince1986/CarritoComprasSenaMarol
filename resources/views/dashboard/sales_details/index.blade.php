@extends('dashboard.master')
@section('titulo','Detalle de Ventas')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Listado de Detalle de Ventas</h1>
    <br>
    <a href="{{url('dashboard/sales_details/create')}}" class="btn btn-info btn-sm"> Nuevo Ingreso</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Detalle de Ventas</th>
                <th>Venta</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Fecha Creacion</th>
                <th>Fecha Actualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales_details as $sales_details)
            <tr>
                <td scope="row">{{$sales_details->id}}</td>
                <td>{{$sales_details->sale_id}}</td>
                <td>{{$sales_details->article_id}}</td>
                <td>{{$sales_details->quantity}}</td>
                <td>{{$sales_details->price}}</td>
                <td>{{$sales_details->discount}}</td>
                <td>{{$sales_details->created_at}}</td>
                <td>{{$sales_details->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/sales_details/'.$sales_details->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/sales_details/'.$sales_details->id) }}" method="post">
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
