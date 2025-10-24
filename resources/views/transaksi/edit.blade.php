@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update',$datatransaksi->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label>Tanggal transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{$datatransaksi->tanggal_transaksi}}">
                            @error('tanggal_transaksi')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{$datatransaksi->jumlah}}">
                            @error('jumlah')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Total harga</label>
                            <input type="number" class="form-control" name="total_harga" value="{{$datatransaksi->total_harga}}">
                            @error('total_harga')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama barang</label>
                            <select type="text" class="form-control" name="id_barang">
                            @foreach($databarang as $data)
                            <option value="{{ $data->id}}"{{$data->id==$datatransaksi->id_barang?'selected':''}}>{{$data->nama_barang}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Nama pembeli</label>
                            <select type="text" class="form-control" name="id_pembeli">
                            @foreach($datapembeli as $data)
                            <option value="{{ $data->id}}"{{$data->id==$datatransaksi->id_pembeli?'selected':''}}>{{$data->nama_pembeli}}</option>
                            @endforeach
                        </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
