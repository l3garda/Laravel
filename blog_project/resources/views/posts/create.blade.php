@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Publicación</div>
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Título</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="content">Contenido</label>
                                <textarea name="content" id="content" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category_id">Categoría</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
