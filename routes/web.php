<?php

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
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

Route::get('/', [LibrosController::class, 'viewAllBooks'])->name('home');
Route::get('/addBook',[LibrosController::class, 'addLibro']);
Route::post('/saveBook',[LibrosController::class, 'saveLibro'])->name('añadirLibro');

Route::get('/updateBookForm/{id}',[LibrosController::class, 'updateBookForm'])->name('actualizarLibro');
Route::post('/updateBook',[LibrosController::class, 'updateBookSave'])->name('saveUpdateBook');

Route::post('/deleteBook/{id}',[LibrosController::class, 'deleteBookController'])->name('borrarLibro');

Route::get('viewBook/{id}', [LibrosController::class, 'viewBook'])->name('verLibro');

Route::get('/prestamos', [PrestamosController::class, 'allPrestamos']);
Route::get('/addPrestamo/{id}', [PrestamosController::class, 'formAddPrestamo'])->name('newPrestamos');
Route::post('/createPrestamos', [PrestamosController::class, 'storePrestamo'])->name('savePrestamo');
