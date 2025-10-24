@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">data Telepon</div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

                    </div>
                        
                    @endif
                    <a href="{{ route('telepon.create')}}" class= "btn btn-primary">add</a>
                 <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor</th>
                        <th scope="col">Nama pengguna</th>
                        <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($datatelepon as $data)
                        <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nomor}}</td>
                        <td>{{$data->pengguna->nama}}</td>
                        <td>
                                    <form action="{{route('telepon.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('telepon.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('telepon.show',$data->id)}}" class="btn btn-warning">Show</a>

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
