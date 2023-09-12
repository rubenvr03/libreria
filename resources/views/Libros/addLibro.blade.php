@extends('layouts.app')
@section('content')

    <h1 class="text-3xl text-neutral-600 text-center">Añadir Formulario</h1>

    <div class="container form-add-book text-center">
        <form action="{{route('añadirLibro')}}" method="POST">
            @csrf
            <div class="name">
                <label for="name" class="block text-sm font-medium text-gray-900">Nombre del Libro</label>
                <input type="text" name="titulo" class="rounded-md text-gry-600 bg-transparent">
            </div>
            <div class="autor">
                <label for="autor" class="block text-sm font-medium text-gray-900">Autor del Libro</label>
                <input type="text" name="autor" class="rounded-md text-gry-600 bg-transparent">
            </div>
            <div class="date_publication">
                <label for="date_publication" class="block text-sm font-medium text-gray-900">Fecha de publicación del Libro</label>
                <input type="date" name="date_publication" class="rounded-md text-gry-600 bg-transparent">
            </div>
            <div class="gender">
                <label for="gender" class="block text-sm font-medium text-gray-900">Género del Libro</label>
                <input type="text" name="gender" class="rounded-md text-gry-600 bg-transparent">
            </div>
            <div class="disponible">
                <label for="disponible" class="block text-sm font-medium text-gray-900">Disponibilidad del  Libro</label>
                <select name="disponible" id="">
                    <option value="1">Disponible</option>
                    <option value="0">agotado</option>afwwe
                </select>
            </div>
            <input type="submit" value="Añadir Libro">
        </form>
    </div>


@endsection
