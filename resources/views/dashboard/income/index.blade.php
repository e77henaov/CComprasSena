@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <div>
    <h1>Listado de Ingresos</h1>
    <br>
    <a href="{{url('dashboard/income/create')}}" class="btn btn-primary btn-sm">Nueva Ingreso</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Proveedor</th>
                <th>Usuario</th>
                <th>TipoComprobamte</th>
                <th>Comprobante</th>
                <th>Nro.Comprobante</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>

    </div>

    
</div>

@endsection