<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;
use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();

        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $databarang = Barang::all();
        $datapembeli = Pembeli::all();
        return view('transaksi.create', compact('databarang','datapembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'tanggal_transaksi' => 'required|string|max:255',
        'jumlah' => 'required|string|max:255',
        'total_harga' => 'required|string|max:255',
        'id_barang' => 'required|string|max:255',
        'id_pembeli' => 'required|string|max:255',
    ],
    [
        'tanggal_transaksi.required' => 'tanggal tidak boleh kosong!',
        'jumlah.required' => 'jumlah tidak boleh kosong!',
        'total_harga.required' => 'total tidak boleh kosong!',
        'id_barang.required' => 'barang tidak boleh kosong!',
        'id_pembeli.required' => 'pembeli tidak boleh kosong!',
    ]);

    $datatransaksi = new Transaksi();
     $datatransaksi->tanggal_transaksi   = $request->tanggal_transaksi;
        $datatransaksi->jumlah = $request->jumlah;
        $datatransaksi->total_harga   = $request->total_harga;
        $datatransaksi->id_barang = $request->id_barang;
         $datatransaksi->id_pembeli = $request->id_pembeli;
    $datatransaksi->save();

    return redirect()->route('transaksi.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datatransaksi      = Transaksi::FindOrFail($id);
        return view('transaksi.show',compact('datatransaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datatransaksi      = Transaksi::findorFail($id);
         $databarang      = Barang::all();
         $datapembeli      = Pembeli::all();
        return view('transaksi.edit',compact('datatransaksi','databarang','datapembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'tanggal_transaksi' => 'required|string|max:255',
        'jumlah' => 'required|string|max:255',
        'total_harga' => 'required|string|max:255',
        'id_barang' => 'required|string|max:255',
        'id_pembeli' => 'required|string|max:255',
    ],
    [
        'tanggal_transaksi.required' => 'tanggal tidak boleh kosong!',
        'jumlah.required' => 'jumlah tidak boleh kosong!',
        'total_harga.required' => 'total tidak boleh kosong!',
        'id_barang.required' => 'barang tidak boleh kosong!',
        'id_pembeli.required' => 'pembeli tidak boleh kosong!',
    ]);

    $datatransaksi          = Transaksi::FindOrFail($id);
     $datatransaksi->tanggal_transaksi   = $request->tanggal_transaksi;
        $datatransaksi->jumlah = $request->jumlah;
        $datatransaksi->total_harga   = $request->total_harga;
        $datatransaksi->id_barang = $request->id_barang;
         $datatransaksi->id_pembeli = $request->id_pembeli;
    $datatransaksi->save();

    return redirect()->route('transaksi.index')->with('success', 'Data berhasil update');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datatransaksi          = Transaksi::findorFail($id);

        $datatransaksi->delete();
        return redirect()->route('transaksi.index')->with('success','Data berhasil dihapus');
    }
}
