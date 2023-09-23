@extends('layouts.app')
@section('content')
    <section class="container max-width-xl my-4">
        <h1 class="text-xl text-slate-900">Reservar Libro</h1>
        <form action="{{route('savePrestamo')}}" method="POST" class="flex flex-col gap-4">
            @csrf
            <select disabled name="book_id" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 w-9/12 mt-5">
            <option selected value="{{$book->id}}">{{$book->titulo}}</option>
            </select>
            <label for="fecha_devolucion">Fecha de Devolución:</label>
            <input type="date" class="w-2/4" name="fecha_devolucion" id="fecha_devolucion">
            <input type="submit" value="Reservar Libro" class="w-1/4 rounded-lg bg-emerald-600 p-3 text-white">
        </form>
    </section>
@endsection
