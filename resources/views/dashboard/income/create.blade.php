@extends('dashboard.master')
@section('titulo','Nuevo Ingreso')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Registrar Nuevo Ingreso</h1>
    <form action="{{ url('dashboard/income') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="provider_id">Proveedor</label>
            <select id="provider_id" name="provider_id" class="form-control" required>
                <option value="" disabled selected>Selecciona un proveedor</option>
                @foreach($providers as $provider)
                    <option value="{{ $provider->id }}">
                        {{ $provider->First_Name }} {{ $provider->Last_Name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="user_id">Usuario</label>
            <select id="user_id" name="user_id" class="form-control" required>
                <option value="" disabled selected>Selecciona un usuario</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="receipt_type">Tipo de Comprobante</label>
            <input type="text" class="form-control" id="receipt_type" name="receipt_type" required>
        </div>

        <div class="form-group">
            <label for="receipt_serier">Serie de Comprobante</label>
            <input type="text" class="form-control" id="receipt_serier" name="receipt_serier" required>
        </div>

        <div class="form-group">
            <label for="receipt_number">Número de Comprobante</label>
            <input type="text" class="form-control" id="receipt_number" name="receipt_number" required>
        </div>

        <div class="form-group">
            <label for="date">Fecha</label>
            <input type="datetime-local" class="form-control" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="tax">Impuesto (%)</label>
            <input type="number" step="0.01" class="form-control" id="tax" name="tax" required>
        </div>

        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" step="0.01" class="form-control" id="total" name="total" required>
        </div>

        <div class="form-group">
            <label for="status">Estado</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Ingreso</button>
    </form>
</div>
@endsection
