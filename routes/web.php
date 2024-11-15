<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mufaj', [Mufaj::class,'index'])->name('mufaj.index');
Route::get('new-genre', function () { return view('mufaj.create');});
Route::post('newgenre', [Mufaj::class,'store'])->name('new.genre');
