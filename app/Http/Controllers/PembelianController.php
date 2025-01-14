<?php

namespace App\Http\Controllers;

use App\Models\AlatTulis;
use App\Models\Pembelian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pembelian::with(['user', 'alattulis'])->where('user_id', Auth::user()->id)->get();
        return view('pembelian.riwayat', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alattulis = AlatTulis::all();
        return view('pembelian.create', compact('alattulis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $harga = AlatTulis::where('id', $request->alattulis_id)->first()->harga;
        $request->merge(['harga_total' => $harga * $request->jumlah]);
        $alattulis = AlatTulis::find($request->alattulis_id);
        $sisa_alattulis = $alattulis->stock - $request->jumlah;

        $alattulis->stock = $sisa_alattulis;

        $data = $request->validate([
            'user_id' => 'required|int',
            'alattulis_id' => 'required|int',
            'jumlah' => 'required|int',
            'harga_total' => 'required|int',
        ]);

        Pembelian::create($data);
        $alattulis->save();

        return redirect()->route('pembelian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembelian $pembelian)
    {
        $data = Pembelian::with(['user', 'alattulis'])->where('id', $pembelian->id)->first();
        return view('pembelian.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }
}
