@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit data post</div>
                <div class="card-body">
                    <form action="{{ route('post.update',$posts->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$posts->title}}">
                             @error('title')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Content</label>
                            <input type="text" class="form-control" name="content" value="{{$posts->content}}">
                             @error('content')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <img src="{{asset('image/' . $posts->cover)}}" width="100">

                        <div class="mb-3">
                            <label>Cover</label>
                            <input type="file" class="form-control" name="cover" value="{{$posts->cover}}">
                             @error('cover')
                                <small style="color: red;">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
