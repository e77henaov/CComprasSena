@extends('dashboard.master')
@section('titulo','Editar Artículo')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Artículo</h1>
    <form action="{{url('dashboard/article/'.$article->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Código</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="code" id="code" value="{{$article->code}}" placeholder="Código del Producto">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" value="{{$article->name}}" placeholder="Nombre del Producto">
            </div>
        </div>
        <div class="form-group row">
            <label for="Sale_Price" class="col-sm-2 col-form-label">Precio de Venta</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Sale_Price" id="Sale_Price" value="{{$article->Sale_Price}}" placeholder="Precio de Venta">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stock" id="stock" value="{{$article->stock}}" placeholder="Cantidad en Stock">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripción</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="description" id="description" value="{{$article->description}}" placeholder="Descripción del Producto">
            </div>
        </div>
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state">
                    <option value="1" {{ $article->state == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ $article->state == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Categoría</label>
            <div class="col-sm-10">
                <select class="form-control" name="category" id="category">
                    @foreach($category as $cat)
                        <option value="{{ $cat->id }}" {{ $article->idCategory == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Modificar</button>
                <a href="{{url('dashboard/article')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection
