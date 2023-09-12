<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Libros extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion',
        'genero',
        'disponible'
    ];

    public static function  getAllBooks(){
        $books = Libros::all();
        return $books;
    }

    public static function addLibro($titulo, $autor, $anio_publicacion, $genero, $disponibilidad){
        $libro = new Libros();
        $libro->titulo = $titulo;
        $libro->autor = $autor;
        $libro->anio_publicacion = $anio_publicacion;
        $libro->genero = $genero;
        $libro->disponible = $disponibilidad;

        $libro->save();
    }

    public static function findBook($id){
        $book = Libros::find($id);
        return $book;
    }

    public static function updatedBook($id, Request $request){
        $book = Libros::find($id);
        $book->titulo = $request->input('titulo');
        $book->autor = $request->input('autor');
        $book->anio_publicacion = $request->input('anio_publicacion');
        $book->genero = $request->input('genero');
        $book->disponible = $request->input('disponible');

        $book->save();

    }

    public static function deleteBook($id){
        $book = Libros::find($id);
        $book->delete();
    }


}
