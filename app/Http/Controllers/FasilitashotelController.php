<?php

namespace App\Http\Controllers;

use App\Models\Fasilitashotel;
use Illuminate\Http\Request;

class FasilitashotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitashotels = Fasilitashotel::latest()->paginate(10);
        return view('fasilitashotels.index',compact('fasilitashotels'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitashotels.create');
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
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Fasilitashotel::create($input);
     
        return redirect()->route('fasilitashotels.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitashotel $fasilitashotel)
    {
        return view('fasilitashotels.show',compact('fasilitashotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitashotel $fasilitashotel)
    {
        return view('fasilitashotels.edit',compact('fasilitashotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitashotel $fasilitashotel)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'keterangan' => 'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $fasilitashotel->update($input);
     
        return redirect()->route('fasilitashotels.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitashotel  $fasilitashotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitashotel $fasilitashotel)
    {
        $fasilitashotel->delete();
     
        return redirect()->route('fasilitashotels.index')
                        ->with('success','Berhasil Hapus !');
    }
}
