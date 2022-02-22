<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservasis = Reservasi::latest()->paginate(10);
        return view('reservasis.index',compact('reservasis'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservasi $reservasi)
    {
        //
    }

    public function search(Request $request, Reservasi $reservasi)
    {
        $keyword = $request->searchreservasis;
        $reservasis = Reservasi::where('nama_tamu', 'like', "%" . $keyword . "%")->paginate(10);
        return view('reservasis.index', compact('reservasis'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function filter(Request $request, Reservasi $reservasi)
    {
        $keyword = $request->filterreservasis;
        $reservasis = Reservasi::where('tgl_check_in', 'like', "%" . $keyword . "%")->paginate(10);
        return view('reservasis.index', compact('reservasis'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
