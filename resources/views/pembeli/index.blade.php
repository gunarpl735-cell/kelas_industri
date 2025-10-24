@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">data pembeli</div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

                    </div>
                        
                    @endif
                    <a href="{{ route('pembeli.create')}}" class= "btn btn-primary">add</a>
                 <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama pembeli</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($pembeli as $data)
                        <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama_pembeli}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->telepon}}</td>
                        <td>
                                    <form action="{{route('pembeli.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('pembeli.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('pembeli.show',$data->id)}}" class="btn btn-warning">Show</a>

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
