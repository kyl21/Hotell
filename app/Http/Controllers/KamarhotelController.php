<?php

namespace App\Http\Controllers;

use App\Models\Kamarhotel;
use Illuminate\Http\Request;

class KamarhotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kamarhotel.index');
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
     * @param  \App\Models\Kamarhotel  $kamarhotel
     * @return \Illuminate\Http\Response
     */
    public function show(Kamarhotel $kamarhotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamarhotel  $kamarhotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamarhotel $kamarhotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamarhotel  $kamarhotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamarhotel $kamarhotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamarhotel  $kamarhotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamarhotel $kamarhotel)
    {
        //
    }
}
