<?php
use App\Http\Controllers\MufajController;
use App\Http\Controllers\bookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mufaj', [MufajController::class,'index'])->name('mufaj.index');
Route::get('new-genre', function () { return view('mufaj.create');});
Route::post('newgenre', [MufajController::class,'store'])->name('new.genre');

Route::get('/new-book', [bookController::class, 'create'])->name('konyv.create');
Route::post('newbook',[bookController::class, 'store'])->name('book.store');
Route::get('/books', [bookController::class,'index'])->name('book.index');
Route::get('/delete{id}', [bookController::class,'delete'])->name('delete_book');
