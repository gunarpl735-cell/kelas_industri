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
                    <a href="{{ route('murid.create')}}" class= "btn btn-primary">add</a>
                 <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                         <th scope="col">Nama lengkap</th>
                                <th scope="col">Jenis kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Id kelas</th>
                        <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($datamurid as $data)
                        <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama_lengkap}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->tanggal_lahir}}</td>
                        <td>{{$data->tempat_lahir}}</td>
                        <td>{{$data->agama}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->kelas->nama_kelas}}</td>
                        <td>
                                    <form action="{{route('murid.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('murid.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('murid.show',$data->id)}}" class="btn btn-warning">Show</a>

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
