@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Publicación</div>
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-2" @error('title')
                        has-error @enderror>
                                <label class="form-label" for="title">Título</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $post->title }}">
                                @error('title')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-2" @error('content')
                        has-error @enderror>
                                <label class="form-label" for="content">Contenido</label>
                                <textarea name="content" id="content" rows="5" class="form-control" value="{{ $post->content }}"></textarea>
                                @error('content')
                                    <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="category_id">Categoría</label>

                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                            {{ $category->category_name }}</option>
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
