@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data biodata</div>
                <div class="card-body">
                    <form action="{{ route('biodata.update',$biodata->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label">Nama lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{$biodata->nama_lengkap}}">
                             @error('nama_lengkap')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label>Jenis kelamin</label>
                            <input type="radio" name="jenis_kelamin" value="laki-laki" id="">laki laki
                            <input type="radio" name="jenis_kelamin" value="perempuan" id="">perempuan<br>
                            @error('jenis_kelamin')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$biodata->tanggal_lahir}}">
                            @error('tanggal_lahir')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$biodata->tempat_lahir}}">
                             @error('tempat_lahir')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Agama</label>
                           <select class="form-select" name="agama">
                            <option value="" selected disabled>Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                           </select>
                            @error('agama')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                              <textarea class="form-control" name="alamat" value="{{$biodata->alamat}}"></textarea>
                             @error('alamat')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$biodata->telepon}}">
                             @error('telepon')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$biodata->email}}">
                             @error('email')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                         <img src="{{asset('image/' . $biodata->cover)}}" width="100">

                        <div class="mb-3">
                            <label>Cover</label>
                            <input type="file" class="form-control" name="cover" value="{{$biodata->cover}}">
                             @error('cover')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
