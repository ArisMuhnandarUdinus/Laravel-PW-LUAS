<?php

namespace App\Http\Controllers;

use App\Models\AlatTulis;
use App\Models\DetailPembelian;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AlatTulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alattulis = AlatTulis::all();
        return view('alattulis.index', compact('alattulis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alattulis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required | max:255',
            'stok' => 'required | integer',
            'harga' => 'required | integer',
        ]);
        AlatTulis::create($validateData);
        return redirect()->route('alattulis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alattulis = AlatTulis::find($id);
        return view('alattulis.show', compact('alattulis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alattulis = AlatTulis::find($id);
        return view('alattulis.edit', compact('alattulis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlatTulis $alattulis)
    {
        $validateData  = $request->validate([
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);
        $alattulis->update($validateData);

        return redirect()->route('alattulis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alattulis = AlatTulis::find($id);
        $alattulis->delete();
        return redirect()->route('alattulis.index');
    }
}
