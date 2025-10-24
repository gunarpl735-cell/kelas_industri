<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all();

        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_kelas' => 'required|string|max:255',
    ], [
        'nama_kelas.required' => 'Nama kelas tidak boleh kosong!',
    ]);

    $kelas = new Kelas();
    $kelas->nama_kelas = $request->nama_kelas;
    $kelas->save();

    return redirect()->route('kelas.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelas      = Kelas::FindOrFail($id);
        return view('kelas.show',compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelas      = Kelas::findorFail($id);
        return view('kelas.edit',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_kelas' => 'required|string|max:255',
                // 'id' => 'required|string|max:255',
            ],
             [
                'nama_kelas.required' => 'Nama kelas tidak boleh kosong!',
                // 'id.required' => 'Id tidak boleh kosong!',
             ]);

        

        $kelas          = Kelas::FindOrFail($id);
        $kelas->nama_kelas   = $request->nama_kelas;

        $kelas->save();
      return redirect()->route('kelas.index')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas          = Kelas::findorFail($id);

        $kelas->delete();
        return redirect()->route('kelas.index')->with('success','Data berhasil dihapus');
    }
}
