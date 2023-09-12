@extends('layouts.app')
@section('content')

<section class="max-width-xl">
<h1 class="text-center text-2xl text-slate-700">Titulo del libro:{{$book->titulo}} </h1>
<h2 class="text-center text-xl text-slate-600">Autor del libro: {{$book->autor}}</h2>
<p class="text-center text-xl text-slate-500">Genero del libro: {{$book->genero}}</p>
<p class="text-center text-xl text-slate-500">Disponibilidad: {{$book->disponibilidad == 1 ? 'Disponible' : 'No Disponible'}}</p>
<p class="text-center text-xl text-slate-500">Año de publicación: {{$book->anio_publicacion}}</p>
</section>
@endsection
