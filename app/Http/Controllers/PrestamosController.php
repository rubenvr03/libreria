<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Prestamos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PrestamosController extends Controller
{
    public function allPresamos(){
        return view('Prestamos.index');
    }

    public function formAddPrestamo($idBook){
        $book = Libros::findBook($idBook);
        return view('Prestamos.addPrestamos', compact('book'));
    }

    public function storePrestamo(Request $request){
        $idBook = $request->input('book_id');
        $fecha_devolucion = $request->input('fecha_devolucion');
        Prestamos::createPrestamo($idBook, $fecha_devolucion);
    }

}
