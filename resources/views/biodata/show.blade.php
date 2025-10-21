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
                            <input type="text" class="form-control" name="nama_lengkap" value="{{$biodata->nama_lengkap}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jenis kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{$biodata->jenis_kelamin}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$biodata->tanggal_lahir}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{$biodata->tempat_lahir}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{$biodata->agama}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{$biodata->alamat}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$biodata->telepon}}" disabled\>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$biodata->email}}" disabled>
                        </div>
                        <div class="mb-3">
                        <img src="{{asset('image/' . $biodata->cover)}}" width="100"> 
                        </div>
                        <a href="{{route('biodata.index')}}" class="btn btn-primary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection