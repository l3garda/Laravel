@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Detalles de la Categoría</h3>
        <div class="card">
            <div class="card-header">
                {{ $category->category_name }}
            </div>
            <div class="card-body">
                <p>Id: {{ $category->id }}</p>
                <p>
                    Status:
                    @if ($category->active)
                        Activa
                    @else
                        Inactiva
                    @endif
                </p>

                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
