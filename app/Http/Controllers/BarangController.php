<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();

        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nama_barang' => 'required|string|max:255',
        'merek' => 'required|string|max:255',
        'harga' => 'required|string|max:255',
        'stok' => 'required|string|max:255',
    ],
    [
        'nama_barang.required' => 'Nama tidak boleh kosong!',
        'merek.required' => 'merek tidak boleh kosong!',
        'harga.required' => 'harga tidak boleh kosong!',
        'stok.required' => 'stok tidak boleh kosong!',
    ]);

    $databarang = new Barang();
     $databarang->nama_barang   = $request->nama_barang;
        $databarang->merek = $request->merek;
        $databarang->harga   = $request->harga;
        $databarang->stok = $request->stok;
    $databarang->save();

    return redirect()->route('barang.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $databarang      = Barang::FindOrFail($id);
        return view('barang.show',compact('databarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $databarang      = Barang::FindOrFail($id);
        return view('barang.edit',compact('databarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'nama_barang' => 'required|string|max:255',
        'merek' => 'required|string|max:255',
        'harga' => 'required|string|max:255',
        'stok' => 'required|string|max:255',
    ],
    [
        'nama_barang.required' => 'Nama tidak boleh kosong!',
        'merek.required' => 'merek tidak boleh kosong!',
        'harga.required' => 'harga tidak boleh kosong!',
        'stok.required' => 'stok tidak boleh kosong!',
    ]);

    $databarang = Barang::findOrFail($id);
     $databarang->nama_barang   = $request->nama_barang;
        $databarang->merek = $request->merek;
        $databarang->harga   = $request->harga;
        $databarang->stok = $request->stok;
    $databarang->save();

    return redirect()->route('barang.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $databarang          = Barang::findorFail($id);

        $databarang->delete();
        return redirect()->route('barang.index')->with('success','Data berhasil dihapus');
    }
}
