<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\File;
class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $biodata = Biodata::all();

        return view('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
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
                'telepon' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                
            ],
             [
                'nama_lengkap.required' => 'Nama tidak boleh kosong!',
                'jenis_kelamin.required' => 'jk tidak boleh kosong!',
                'tanggal_lahir.required' => 'tl tidak boleh kosong!',
                'tempat_lahir.required' => 'tempat lahir tidak boleh kosong!',
                'agama.required' => 'agama tidak boleh kosong!',
                'telepon.required' => 'telp tidak boleh kosong!',
                'email.required' => 'email tidak boleh kosong!',
             ]);
        $biodata          = new Biodata;
        $biodata->nama_lengkap   = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir   = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama   = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon   = $request->telepon;
        $biodata->email = $request->email;
        $biodata->cover = $request->cover;
        
         if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image',$name);
            $biodata->cover=$name;
        }

        $biodata->save();
        session()->flash('success','data berhasil di tambahan');
        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata      = Biodata::findorFail($id);
        return view('biodata.show',compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $biodata      = Biodata::findorFail($id);
        return view('biodata.edit',compact('biodata'));
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
                'telepon' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                
            ],
             [
                'nama_lengkap.required' => 'Nama tidak boleh kosong!',
                'jenis_kelamin.required' => 'jk tidak boleh kosong!',
                'tanggal_lahir.required' => 'tl tidak boleh kosong!',
                'tempat_lahir.required' => 'tempat lahir tidak boleh kosong!',
                'agama.required' => 'agama tidak boleh kosong!',
                'telepon.required' => 'telp tidak boleh kosong!',
                'email.required' => 'email tidak boleh kosong!',
             ]);

         $biodata          = Biodata::findorFail($id);
        $biodata->nama_lengkap   = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir   = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama   = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon   = $request->telepon;
        $biodata->email = $request->email;
        $biodata->cover = $request->cover;
             
        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image',$name);
            $biodata->cover=$name;
        }
        $biodata->save();
        session()->flash('success','data berhasil di tambahan');
        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $biodata          = Biodata::findorFail($id);

        $biodata->delete();
        return redirect()->route('biodata.index')->with('success','Data berhasil dihapus');
    }
}
