@extends('layouts.app')
@section('content')
<div class="container">
  <form class="mt-2" name="create_platform" action="{{route('posts.update',$post)}}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
      <label for="titulo" class="form-label">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required
        value="{{$post->titulo}}"/>
    </div>
    <div class="form-group mb-3">
      <label for="texto" class="form-label">Texto</label>
      <textarea type="textarea" rows="5" class="form-control" id="texto" name="texto">
        {{$post->texto}}
      </textarea>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="publicado" name="publicado"
        @checked($post->publicado)>
      <label class="form-check-label" for="publicado">
      ¿Publicar?
      </label>
    </div>

    <button type="submit" class="btn btn-primary" name="">Actualizar</button>
  </form>
</div>
@endsection