<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use App\Models\Libros;

class Prestamos extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'fecha_devolucion'
    ];


    public static function createPrestamo($idBook, $fecha_devolucion){
        $book = Libros::with('id')->find($idBook);
        dd($book);
        if($book->disponible === 1){
            $prestamos = new Prestamos();
            $prestamos->book_id = $idBook;
            $prestamos->fecha_devolucion = $fecha_devolucion;
            $prestamos->save();
            $book->disponible = 0;
            Redirect::to('home');

        }
    }

}
