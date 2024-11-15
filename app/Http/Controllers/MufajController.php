<?php

namespace App\Http\Controllers;

use App\Models\Mufaj;
use App\Http\Requests\StoreMufajRequest;
use App\Http\Requests\UpdateMufajRequest;

class MufajController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mufaj.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $mufaj = new Mufaj();
        $mufaj->nev = $request->name;
        if($mufaj->save()){
            return redirect()->route('mufaj.index')->with('success','Sikeres rögzítés');
        }else{
            return redirect()->back()->with('error','Hiba llépett fel.');
        }

    }


    /**
     * Display the specified resource.
     */
    public function show(Mufaj $mufaj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mufaj $mufaj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMufajRequest $request, Mufaj $mufaj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mufaj $mufaj)
    {
        //
    }
}
