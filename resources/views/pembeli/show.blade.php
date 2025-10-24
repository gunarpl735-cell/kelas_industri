@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show pembeli</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label">Nama pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{$datapembeli->nama_pembeli}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">Jenis kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{$datapembeli->jenis_kelamin}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label">Telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{$datapembeli->telepon}}" disabled>
                        </div>
                        <a href="{{route('pembeli.index')}}" class="btn btn-primary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
