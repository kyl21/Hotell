<?php

namespace App\Http\Controllers;

use App\Models\Fasilitaskamar;
use App\Models\Kamar;
use App\Models\Fasilitashotel;
use Illuminate\Http\Request;

class FasilitaskamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitaskamars = Fasilitaskamar::latest()->paginate(10);
        return view('fasilitaskamars.index',compact('fasilitaskamars'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamars = Kamar::all(); 
        $fasilitashotels = Fasilitashotel::all();
        return view('fasilitaskamars.create',compact('kamars','fasilitashotels', $kamars, $fasilitashotels));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'nama_fasilitas' => 'required',
        ]);
    
        Fasilitaskamar::create($request->all());
     
        return redirect()->route('fasilitaskamars.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitaskamar  $fasilitaskamar
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitaskamar $fasilitaskamar)
    {
        return view('fasilitaskamars.show',compact('fasilitaskamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitaskamar  $fasilitaskamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitaskamar $fasilitaskamar)
    {
        $kamars = Kamar::all(); 
        $fasilitashotels = Fasilitashotel::all();
        return view('fasilitaskamars.edit',compact('fasilitaskamar', 'kamars', 'fasilitashotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitaskamar  $fasilitaskamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitaskamar $fasilitaskamar)
    {
        $request->validate([
            'tipe_kamar' => 'required',
            'nama_fasilitas' => 'required',
        ]);
    
        $fasilitaskamar->update($request->all());
    
        return redirect()->route('fasilitaskamars.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitaskamar  $fasilitaskamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitaskamar $fasilitaskamar)
    {
        $fasilitaskamar->delete();
     
        return redirect()->route('fasilitaskamars.index')
                        ->with('success','Berhasil Hapus !');
    }
}
