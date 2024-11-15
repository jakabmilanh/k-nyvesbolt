<?php
use App\Http\Controllers\MufajController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mufaj', [MufajController::class,'index'])->name('mufaj.index');
Route::get('new-genre', function () { return view('mufaj.create');});
Route::post('newgenre', [MufajController::class,'store'])->name('new.genre');
