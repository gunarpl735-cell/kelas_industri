@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nama pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" placeholder="nama_pembeli">
                            @error('nama_pembeli')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                            <label>Jenis kelamin</label><br>
                            <input type="radio"  name="jenis_kelamin"  value="laki-laki">laki-laki <br>
                             <input type="radio" name="jenis_kelamin"  value="perempuan">perempuan <br>
                            @error('jenis_kelamin')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="telepon">
                            @error('telepon')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
