@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show data post</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label">Nama lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{$datamurid->nama_lengkap}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jenis kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{$datamurid->jenis_kelamin}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$datamurid->tanggal_lahir}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$datamurid->tempat_lahir}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{$datamurid->agama}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{$datamurid->alamat}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$datamurid->email}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Id kelas</label>
                            <input type="text" class="form-control" name="id_kelas" value="{{$datamurid->kelas->nama_kelas}}" disabled>
                        </div>
                        <a href="{{route('murid.index')}}" class="btn btn-primary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection