@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Editar Categoría</h3>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-1" @error('category_name') has-error @enderror>
                <label for="category_name" class="form-label mb-1">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="category_name" name="category_name"
                    value="{{ $category->category_name }}">
                @error('category_name')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-1">
                <label for="active" class="form-label mb-1">Activa</label>
                <select name="active" id="active" class="form-control">
                    <option value="1" {{ $category->active ? 'selected' : '' }}>Activa</option>
                    <option value="0" {{ !$category->active ? 'selected' : '' }}>Inactiva</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
    </div>
@endsection
