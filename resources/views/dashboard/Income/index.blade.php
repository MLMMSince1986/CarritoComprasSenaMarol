@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')

<div class="container py-4">
    <h1>Listado de Ingresos</h1>
    <br>
    <a href="{{url('dashboard/Income/create')}}" class="btn btn-info btn-sm"> Nuevo Ingreso</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id Ingreso</th>
                <th>Proveedor</th>
                <th>Usuario</th>
                <th>Tipo de Recibo</th>
                <th>Serie de Recibo</th>
                <th>Numero de Recibo</th>
                <th>Fecha</th>
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
            @foreach($Income as $Income)
            <tr>
                <td scope="row">{{$Income->id}}</td>
                <td>{{$Income->provider_id}}</td>
                <td>{{$Income->user_id}}</td>
                <td>{{$Income->receipt_type}}</td>
                <td>{{$Income->receipt_series}}</td>
                <td>{{$Income->receipt_number}}</td>
                <td>{{$Income->date}}</td>
                <td>{{$Income->tax}}</td>
                <td>{{$Income->total}}</td>
                <td>{{$Income->status ? _('RECIBIDO') : _('RECHAZADO') }}</td>
                <td>{{$Income->created_at}}</td>
                <td>{{$Income->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/Income/'.$Income->id.'/edit')}}" class="bi bi-pencil-square"></a>
                </td>
                <td>
                    <form action="{{ url('dashboard/Income/'.$Income->id) }}" method="post">
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
