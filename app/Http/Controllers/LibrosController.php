<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LibrosController extends Controller
{
    public static function addLibro(){
       return view('Libros.addLibro');
    }


    public function saveLibro(Request $request){
        $titulo = $request->input('titulo');
        $autor = $request->input('autor');
        $anio_publicacion = $request->input('date_publication');
        $genero = $request->input('gender');
        $disponibilidad = $request->input('disponible');

        $createBook= Libros::addLibro($titulo, $autor, $anio_publicacion, $genero, $disponibilidad);

            session()->flash('bookAdd','Libro añadido exitosamente');
            return Redirect::to('/books');

    }

    public function viewAllBooks(){
        $allBooks = Libros::getAllBooks();
        return view('Libros.allBooks', compact('allBooks'));
    }

    public function updateBookForm($id){
        $libro = Libros::findBook($id);
        Session::put('id', $id);
        return view('Libros.updateLibro', compact('libro'));
    }

    public function updateBookSave(Request $request){
        $idBook = Session::get('id');
        $book= Libros::updatedBook($idBook, $request);
        return Redirect::to('/books');
    }

    public function deleteBookController($id){
        Libros::deleteBook($id);
        session()->flash('bookDelete','Libro borrado Correctamente');
        return Redirect::to('/books');
    }

    public function viewBook($id){
        $book = Libros::findBook($id);
        return view('Libros.viewBook', compact('book'));
    }

}
