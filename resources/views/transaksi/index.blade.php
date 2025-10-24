@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">data transaksi</div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

                    </div>
                        
                    @endif
                    <a href="{{ route('transaksi.create')}}" class= "btn btn-primary">add</a>
                 <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                         <th scope="col">tanggal_transaksi</th>
                                <th scope="col">jumlah</th>
                                <th scope="col">total_harga</th>
                                <th scope="col">nama barang</th>
                                <th scope="col">nama pembeli</th>
                        <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($transaksi as $data)
                        <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->tanggal_transaksi}}</td>
                        <td>{{$data->jumlah}}</td>
                        <td>{{$data->total_harga}}</td>
                        <td>{{$data->barang->nama_barang}}</td>
                        <td>{{$data->pembeli->nama_pembeli}}</td>
                        <td>
                                    <form action="{{route('transaksi.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-warning">Show</a>

                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('apakah anda yakin?')">Delete</button>
                                    </form>
                                </td>
                        </tr>
                         @endforeach
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
