@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add data biodata</div>
                <div class="card-body">
                    <form action="{{ route('biodata.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label">Nama lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="nama_lengkap">
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
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal_lahir">
                            @error('tanggal_lahir')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir">
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
                            <textarea class="form-control" name="alamat" placeholder="alamat"></textarea>
                            @error('alamat')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="telepon">
                            @error('telepon')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="email">
                            @error('email')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label>Cover</label>
                            <input type="file" class="form-control" name="cover" placeholder="Cover">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
