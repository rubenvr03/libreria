@extends('layouts.app')
@section('content')

@if( session('bookAdd') )
    <x-alert type="success">
    {{ session('bookAdd') }}
    </x-alert>
@elseif (session('bookDelete'))
    <x-alert type="danger">
        {{ session('bookDelete') }}
    </x-alert>
@endif

<section class="container books grid grid-cols-3 gap-4 container mx-auto my-4 ">
    @forelse ($allBooks as $book )
        <div class="book shadow flex flex-wrap text-center justify-center flex-col dark:bg-gray-800 p-3 text-white">
            <a href="{{route('verLibro', $book->id)}}">
            <h3 class="text-2xl uppercase font-semibold mb-3">{{$book->titulo}}</h3>
            <p class="text-1xl font-medium mb-3">Autor: {{$book->autor}}</p>
            <p class="mb-3" >Genero: {{$book->genero}}</p>
            <p class="mb-3">Disponibilidad: {{$book->disponible==1? 'Disponible' : 'No Disponible'}}</p>
            <p class="mb-3">Año de Publicacion: {{$book->anio_publicacion}}</p>
            <div class="buttons flex gap-2 justify-center">
                <a class="rounded-full bg-orange-200 p-2 my-2 dark:text-slate-500" href="{{route('actualizarLibro', $book->id)}}">Modificar Libro</a>
                <form action="{{route('borrarLibro', $book->id)}}" method="POST"  >
                    @csrf
                    <button href="" class="rounded-full bg-red-500 p-2 my-2 hover:bg-red-800 hover:text-white" >Borrar Libro</button>
                </form>
                @if($book->disponible == 1)
                    <a href="{{route('newPrestamos', $book->id)}}" class="rounded-full bg-orange-200 p-2 my-2 dark:text-slate-500">Realizar Reserva</a>
                @endif
            </div>
            </a>
        </div>

    @empty
    <div class="book">
        <h2>No hay Libros Disponibles</h2>
    </div>
    @endforelse

</section>
@endsection
