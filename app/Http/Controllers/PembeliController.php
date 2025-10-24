<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli = Pembeli::all();

        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nama_pembeli' => 'required|string|max:255',
        'jenis_kelamin' => 'required|string|max:255',
        'telepon' => 'required|string|max:255',
        
    ],
    [
        'nama_pembeli.required' => 'Nama tidak boleh kosong!',
        'jenis_kelamin.required' => 'jk tidak boleh kosong!',
        'telepon.required' => 'telepon tidak boleh kosong!',
        
    ]);

    $datapembeli = new Pembeli();
     $datapembeli->nama_pembeli   = $request->nama_pembeli;
        $datapembeli->jenis_kelamin = $request->jenis_kelamin;
        $datapembeli->telepon   = $request->telepon;
    $datapembeli->save();

    return redirect()->route('pembeli.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datapembeli      = Pembeli::FindOrFail($id);
        return view('pembeli.show',compact('datapembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $datapembeli      = Pembeli::FindOrFail($id);
        return view('pembeli.edit',compact('datapembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'nama_pembeli' => 'required|string|max:255',
        'jenis_kelamin' => 'required|string|max:255',
        'telepon' => 'required|string|max:255',
        
    ],
    [
        'nama_pembeli.required' => 'Nama tidak boleh kosong!',
        'jenis_kelamin.required' => 'jk tidak boleh kosong!',
        'telepon.required' => 'telepon tidak boleh kosong!',
        
    ]);


     $datapembeli = Pembeli::findOrFail($id);
    $datapembeli->nama_pembeli   = $request->nama_pembeli;
        $datapembeli->jenis_kelamin = $request->jenis_kelamin;
        $datapembeli->telepon   = $request->telepon;
    $datapembeli->save();
    return redirect()->route('pembeli.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $datapembeli          = Pembeli::findorFail($id);

        $datapembeli->delete();
        return redirect()->route('pembeli.index')->with('success','Data berhasil dihapus');
    }
}
