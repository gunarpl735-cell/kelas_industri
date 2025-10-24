@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">barang</div>
                <div class="card-body">
                    <form action="{{ route('barang.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="nama_barang">
                            @error('nama_barang')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Merek</label>
                            <input type="text" class="form-control" name="merek" placeholder="merek">
                            @error('merek')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" placeholder="harga">
                            @error('harga')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok" placeholder="stok">
                            @error('stok')
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
