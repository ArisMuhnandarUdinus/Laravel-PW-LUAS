<?php

namespace App\Http\Controllers;

use App\Models\DetailPembelian;
use Illuminate\Http\Request;

class DetailPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allDetailPembelian = DetailPembelian::all();
        return view('detailpembelian.index', compact('allDetailPembelian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detailpembelian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $validateData = $request->validate([
            'nama' => 'required | max:100',
        ]);

        // save data
        DetailPembelian::create($validateData);

        // redirect ke index detailpembelian
        return redirect()->route('detailpembelian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailPembelian $detailpembelian)
    {
        return view('detailpembelian.show', compact('detailpembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailPembelian $detailpembelian)
    {
        return view('detailpembelian.edit', compact('detailpembelian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailPembelian $detailpembelian)
    {
        $validateData = $request->validate([
            'nama' => 'required | max:100',
        ]);

        $detailpembelian->update($validateData);

        return redirect()->route('detailpembelian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailPembelian $detailpembelian)
    {
        $detailpembelian->delete();
        return redirect()->route('detailpembelian.index');
    }
}
