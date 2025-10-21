<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $pengguna = Pengguna::all();

        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
    ], [
        'nama.required' => 'Nama tidak boleh kosong!',
    ]);

    $pengguna = new Pengguna();
    $pengguna->nama = $request->nama;
    $pengguna->save();

    return redirect()->route('pengguna.index')->with('success', 'Data berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $pengguna      = Pengguna::FindOrFail($id);
        return view('pengguna.show',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $pengguna      = Pengguna::findorFail($id);
        return view('pengguna.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,String $id)
    {
         $request->validate(
            [
                'nama' => 'required|string|max:255',
                // 'id' => 'required|string|max:255',
            ],
             [
                'nama.required' => 'Nama tidak boleh kosong!',
                // 'id.required' => 'Id tidak boleh kosong!',
             ]);

        

        $pengguna          = Pengguna::FindOrFail($id);
        $pengguna->nama   = $request->nama;

        $pengguna->save();
      return redirect()->route('pengguna.index')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
          $pengguna          = Pengguna::findorFail($id);

        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success','Data berhasil dihapus');
    }
}
