<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $datamurid = Murid::all();

        return view('murid.index', compact('datamurid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $datakelas = Kelas::all();
        return view('murid.create', compact('datakelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                // 'id_kelas' => 'required|string|max:255',
                
            ],
             [
                'nama_lengkap.required' => 'Nama tidak boleh kosong!',
                'jenis_kelamin.required' => 'jk tidak boleh kosong!',
                'tanggal_lahir.required' => 'tl tidak boleh kosong!',
                'tempat_lahir.required' => 'tempat lahir tidak boleh kosong!',
                'agama.required' => 'agama tidak boleh kosong!',
                'telepon.required' => 'telp tidak boleh kosong!',
                'email.required' => 'email tidak boleh kosong!',
                // 'id_kelas' => 'id tidak boleh kosong!',
             ]);
        $datamurid          = new Murid;
        $datamurid->nama_lengkap   = $request->nama_lengkap;
        $datamurid->jenis_kelamin = $request->jenis_kelamin;
        $datamurid->tanggal_lahir   = $request->tanggal_lahir;
        $datamurid->tempat_lahir = $request->tempat_lahir;
        $datamurid->agama   = $request->agama;
        $datamurid->alamat = $request->alamat;
        $datamurid->email = $request->email;
        $datamurid->id_kelas = $request->id_kelas;
         $datamurid->save();

        session()->flash('succes','Data berhasil ditambahkan');
    return redirect()->route('murid.index');
    }

        
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $datamurid      = Murid::FindOrFail($id);
        return view('murid.show',compact('datamurid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datamurid      = Murid::findorFail($id);
         $datakelas      = Kelas::all();
        return view('murid.edit',compact('datamurid','datakelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'id_kelas' => 'required|string|max:255',
                
            ],
             [
                'nama_lengkap.required' => 'Nama tidak boleh kosong!',
                'jenis_kelamin.required' => 'jk tidak boleh kosong!',
                'tanggal_lahir.required' => 'tl tidak boleh kosong!',
                'tempat_lahir.required' => 'tempat lahir tidak boleh kosong!',
                'agama.required' => 'agama tidak boleh kosong!',
                'telepon.required' => 'telp tidak boleh kosong!',
                'email.required' => 'email tidak boleh kosong!',
                'id_kelas' => 'id tidak boleh kosong!',
             ]);
              $datamurid          = Murid::FindOrFail($id);
              $datamurid->nama_lengkap   = $request->nama_lengkap;
        $datamurid->jenis_kelamin = $request->jenis_kelamin;
        $datamurid->tanggal_lahir   = $request->tanggal_lahir;
        $datamurid->tempat_lahir = $request->tempat_lahir;
        $datamurid->agama   = $request->agama;
        $datamurid->alamat = $request->alamat;
        $datamurid->email = $request->email;
        $datamurid->id_kelas = $request->id_kelas;
        $datamurid->save();
        session()->flash('succes','Data berhasil dirubah');
    return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $murid          = Murid::findorFail($id);

        $murid->delete();
        return redirect()->route('murid.index')->with('success','Data berhasil dihapus');
    }
}
