@extends('layouts.app')

@section('content')

<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
  @foreach ($posts as $post)
    {{-- visualizamos los atributos del objeto --}}
    <li>
      <a href="{{route('posts.show',$post)}}"> {{$post->titulo}}</a>.
      Escrito el {{$post->created_at}}
    </li>
  @endforeach
</ul>

@endsection