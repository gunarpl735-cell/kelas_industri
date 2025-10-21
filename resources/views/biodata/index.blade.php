@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">data biodata</div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>

                    </div>

                    @endif
                    <a href="{{ route('biodata.create')}}" class="btn btn-primary">add</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th scope="col">Nama lengkap</th>
                                <th scope="col">Jenis kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Email</th>
                                 <th scope="col">Cover</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($biodata as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_lengkap}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->tanggal_lahir}}</td>
                                <td>{{$data->tempat_lahir}}</td>
                                <td>{{$data->agama}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->telepon}}</td>
                                <td>{{$data->email}}</td>
                                <td><img src="{{asset('image/' . $data->cover)}}" width="100"></td>
                               <td>
                                    <form action="{{route('biodata.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('biodata.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('biodata.show',$data->id)}}" class="btn btn-warning">Show</a>

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