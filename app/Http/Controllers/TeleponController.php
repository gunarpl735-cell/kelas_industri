<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use App\Models\Telepon;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatelepon = Telepon::all();

        return view('telepon.index', compact('datatelepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapengguna = Pengguna::all();
        return view('telepon.create', compact('datapengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'nomor' => 'required|string|max:255',
    ],
    [
        'nomor.required' => 'Nomor tidak boleh kosong!',
    ]);

    $telepon = new Telepon();
    $telepon->nomor = $request->nomor;
    $telepon->id_pengguna = $request->id_pengguna;
    $telepon->save();

    session()->flash('succes','Data berhasil ditambahkan');
    return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepon      = Telepon::FindOrFail($id);
        return view('telepon.show',compact('telepon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $datatelepon      = Telepon::findorFail($id);
         $datapengguna      = Pengguna::all();
        return view('telepon.edit',compact('datatelepon','datapengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nomor' => 'required|string|max:255',
                // 'id' => 'required|string|max:255',
            ],
             [
                'nomor.required' => 'nomor tidak boleh kosong!',
                // 'id.required' => 'Id tidak boleh kosong!',
             ]);

        

        $datatelepon          = Telepon::FindOrFail($id);
        $datatelepon->nomor   = $request->nomor;
        $datatelepon->id_pengguna   = $request->id_pengguna;

        $datatelepon->save();
     session()->flash('succes','Data berhasil dirubah');
    return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepon          = Telepon::findorFail($id);

        $telepon->delete();
        return redirect()->route('telepon.index')->with('success','Data berhasil dihapus');
    }
}
