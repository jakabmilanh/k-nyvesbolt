<?php

namespace App\Http\Controllers;

use App\Models\Mufaj;
use App\Models\book;
use Illuminate\Http\Request;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        return view('konyv.show',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $mufajs = Mufaj::all();
        return view('konyv.create',compact('mufajs'));
   }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $book = new book();
        $book->cim = $request->book_name;
        $book->szerzo = $request->book_szerzo;
        $book->kiadas_eve = $request->book_ev;
        $book->mufaj_id = $request->mufaj_id;
        $request->validate([
            'mufaj_id' => 'required|integer|max:255',
            'book_name' => 'required|string|max:255',
            'book_szerzo' => 'required|string|max:255',
            'book_ev' => 'required|integer|',
            
        ]);
        if($book->save()){
            return redirect()->route('book.index')->with('success','Sikeres rögzítés');
        }else{
            return redirect()->back()->with('error','Hiba llépett fel.');
        }
   }


    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookRequest $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        //
    }
}
