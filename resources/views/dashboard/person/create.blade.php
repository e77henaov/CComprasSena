@extends('dashboard.master')
@section('titulo', 'Nueva Persona')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Crear Persona</h1>
    <form action="{{url('dashboard/person')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Tipo de Persona</label>
            <div class="col-sm-10">
                <select class="form-control" name="type" id="type">
                    <option value="Persona Natural">Persona Natural</option>
                    <option value="Empresa">Empresa</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="First_Name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Apellido">
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_type" class="col-sm-2 col-form-label">Tipo de Documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="Document_type" id="Document_type">
                    <option value="CC">CC</option>
                    <option value="TI">TI</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Nit">Nit</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Number" class="col-sm-2 col-form-label">Número de Documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Número de Documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Dirección</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Dirección">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Teléfono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Teléfono">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Correo Electrónico</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="Email" id="Email" placeholder="Correo Electrónico">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Crear</button>
                <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
