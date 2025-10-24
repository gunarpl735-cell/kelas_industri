@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show data transaksi</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label">tanggal_transaksi</label>
                            <input type="text" class="form-control" name="tanggal_transaksi" value="{{$datatransaksi->tanggal_transaksi}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{$datatransaksi->jumlah}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">total_harga</label>
                            <input type="text" class="form-control" name="total_harga" value="{{$datatransaksi->total_harga}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">nama_barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$datatransaksi->barang->nama_barang}}" disabled>
                        </div>
                         <div class="mb-3">
                            <label">nama_pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{$datatransaksi->pembeli->nama_pembeli}}" disabled>
                        </div>
                        <a href="{{route('transaksi.index')}}" class="btn btn-primary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
