<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnCallback;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [LibrosController::class, 'viewAllBooks']);
Route::get('/addBook',[LibrosController::class, 'addLibro']);
Route::post('/saveBook',[LibrosController::class, 'saveLibro'])->name('añadirLibro');

Route::get('/updateBookForm/{id}',[LibrosController::class, 'updateBookForm'])->name('actualizarLibro');
Route::post('/updateBook',[LibrosController::class, 'updateBookSave'])->name('saveUpdateBook');

Route::post('/deleteBook/{id}',[LibrosController::class, 'deleteBookController'])->name('borrarLibro');

Route::get('viewBook/{id}', [LibrosController::class, 'viewBook'])->name('verLibro');
