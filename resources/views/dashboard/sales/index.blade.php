@extends('dashboard.master')
@section('titulo','Ventas')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Listado de Ventas</h1>
    <br>
    <a href="{{url('dashboard/sales/create')}}" class="btn btn-info btn-sm"> Nuevo Ingreso</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Ventas</th>
                <th>Cliente</th>
                <th>Usuario</th>
                <th>Tipo de Recibo</th>
                <th>Serie de Recibo</th>
                <th>Numero de Recibo</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Fecha Creacion</th>
                <th>Fecha Actualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sales)
            <tr>
                <td scope="row">{{$sales->id}}</td>
                <td>{{$sales->client_id}}</td>
                <td>{{$sales->user_id}}</td>
                <td>{{$sales->receipt_type}}</td>
                <td>{{$sales->receipt_series}}</td>
                <td>{{$sales->receipt_number}}</td>
                <td>{{$sales->tax}}</td>
                <td>{{$sales->total}}</td>
                <td>{{$sales->status ? _('VENDIDO') : _('RECHAZADO') }}</td>
                <td>{{$sales->created_at}}</td>
                <td>{{$sales->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/sales/'.$sales->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/sales/'.$sales->id) }}" method="post">
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
