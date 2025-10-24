@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit</div>
                <div class="card-body">
                    <form action="{{ route('barang.update', $datapembeli->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label>Nama pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" placeholder="nama_pembeli" value="{{ $datapembeli->nama_barang }}">
                            @error('nama_pembeli')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" placeholder="jenis_kelamin" value="{{ $datapembeli->merek }}">
                            @error('jenis_kelamin')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="telepon" value="{{ $datapembeli->harga }}">
                            @error('telepon')
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
