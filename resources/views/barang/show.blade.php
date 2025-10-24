@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show barang</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label">Nama barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$databarang->nama_barang}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">Merek</label>
                            <input type="text" class="form-control" name="merek" value="{{$databarang->merek}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$databarang->harga}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{$databarang->stok}}" disabled>
                        </div>
                        <a href="{{route('barang.index')}}" class="btn btn-primary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
