@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Categoría</h1>
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="form-group">

                <div class="mb-3">

                    <label for="category_name" class="form-label">
                        Nombre categoría
                    </label>
                    <input type="text" name="category_name" id="category_name" class="form-control">

                </div>
                <div class="mb-3">

                    <label for="active">Activa</label>
                    <select class="form-control" name="active" id="active">

                        <option value="1">Activa</option>
                        <option value="0">Inactiva</option>

                    </select>

                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>

            </div>

        </form>
    </div>
@endsection
